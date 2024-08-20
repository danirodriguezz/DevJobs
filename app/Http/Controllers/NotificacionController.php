<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NotificacionController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        // Obtener las notificaciones del usuario autenticado
        $notificaciones = auth()->user()->unreadNotifications;
        // Limpiar las notificaciones
        auth()->user()->unreadNotifications->markAsRead();
        return view('notificaciones.index', [
            'notificaciones' => $notificaciones
        ]);
    }
}
