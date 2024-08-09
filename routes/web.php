<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\VacantesController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [VacantesController::class, 'index'])->middleware(['auth', 'verified'])->name('vacantes.index');
Route::get('/vacantes/create', [VacantesController::class, 'create'])->middleware(['auth', 'verified'])->name('vacantes.create');
Route::get('/vacantes/{vacante}/edit', [VacantesController::class, 'edit'])->middleware(['auth', 'verified'])->name('vacantes.edit');
Route::delete('/vacantes/{vacante}/destroy', [VacantesController::class, 'destroy'])->middleware(['auth', 'verified'])->name('vacantes.destroy');




Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
