<?php

namespace App\Http\Livewire;
use App\Models\Carrera;
use Livewire\Component;
use App\Models\Estudiantes;

class Estudiante extends Component
{

    public $seleccionado='';
    public $carreras;

    public function mount(){
        $this-> carreras= [];
    }

    public function render()
    {  $this->carreras = Carrera::all();
        return view('livewire.estudiante');
    }

}
