<?php

namespace App\Http\Controllers;

use App\Models\Vacante;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Storage;

use function PHPSTORM_META\type;

class VacantesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if(Gate::allows('viewAny', Vacante::class)) {
            return view('vacantes.index');
        } else {
            abort(401);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if(Gate::allows('viewAny', Vacante::class)) {
            return view('vacantes.create');
        } else {
            abort(401);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Vacante $vacante)
    {
        $postulo = DB::table('candidatos')
                    ->where('user_id', auth()->user()->id)
                    ->where('vacantes_id', $vacante->id)
                    ->get()->isEmpty();
        return view('vacantes.show', [
            'vacante' => $vacante,
            'postulo' => $postulo
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Vacante $vacante)
    {
        // Verificamos que el $user->id == $vacante->user_id
        if (Gate::allows('update', $vacante)){
            return view('vacantes.edit', [
                'vacante' => $vacante
            ]);
        }else{
            return redirect()->route('vacantes.index');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }
}
