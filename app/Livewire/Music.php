<?php

namespace App\Livewire;

use App\Models\Music as ModelsMusic;
use App\Models\Musicblogger;
use Livewire\Component;

class Music extends Component
{
   
    public function render()
    {
        return view('livewire.music',['users'=>Musicblogger::all()]);
    }
}
