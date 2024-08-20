<?php

namespace App\Livewire;

use App\Models\Candidato;
use App\Models\Vacante;
use App\Notifications\NuevoCandidato;
use Livewire\Component;
use Livewire\WithFileUploads;

class PostularVacante extends Component
{
    public $cv;
    public $vacante;

    use WithFileUploads;

    protected $rules = [
        'cv' => 'required|mimes:pdf'
    ];

    public function mount(Vacante $vacante) {
        $this->vacante = $vacante;
    }

    public function postularme() {
        $datos = $this->validate();
        // Guardar el cv
        $cv = $this->cv->store('public/cv');
        $datos['cv'] = str_replace('public/cv/', '', $cv);

        // Crear el candidato a la vacante
        Candidato::create([
            'user_id' => auth()->user()->id,
            'vacantes_id' => $this->vacante->id,
            'cv' => $datos['cv']
        ]);

        // Crear notificación y enviar email
        $this->vacante->reclutador->notify(new NuevoCandidato($this->vacante->id, $this->vacante->titulo, auth()->user()->id));

        // Mostrando un mensaje de ok
        session()->flash('mensaje', 'Se ha inscrito correctamente');

        // Redireccionamos al usuario
        return redirect()->back();
    }

    public function render()
    {
        return view('livewire.postular-vacante');
    }
}
