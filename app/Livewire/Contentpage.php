<?php

namespace App\Livewire;

use App\Models\Blogger;
use Livewire\Component;

class Contentpage extends Component
{
    public function render()
    {
        return view('livewire.contentpage', ['users'=>Blogger::all()]);
    }
}
