<?php

namespace App\Livewire;

use App\Models\Sports as ModelsSports;
use Livewire\Component;

class Sports extends Component
{

    public function render()
    {
        return view('livewire.sports',['users'=>ModelsSports::all()]);
    }
}
