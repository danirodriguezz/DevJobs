<?php

namespace App\Livewire;

use App\Models\Vacante;
use Livewire\Component;
use Livewire\Attributes\On;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Storage;

class MostrarVacantes extends Component
{
    #[On('eliminarVacante')]
    public function eliminarVacante($vacante_id) {
        $vacante = Vacante::find($vacante_id);
        // Verificamos que el $user->id == $vacante->user_id
        if ($vacante && Gate::allows('delete', $vacante)){
            Storage::delete('public/vacantes/' . $vacante->imagen);
            $vacante->delete();
        }
    }

    public function render()
    {
        $vacantes = Vacante::where('user_id', auth()->user()->id)->paginate(10);
        return view('livewire.mostrar-vacantes', [
            'vacantes' => $vacantes
        ]);
    }
}
