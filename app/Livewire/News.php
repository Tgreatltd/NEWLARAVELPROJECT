<?php

namespace App\Livewire;

use App\Models\News as ModelsNews;
use Illuminate\Database\Eloquent\Model;
use Livewire\Component;

class News extends Component
{
    
    public function render()
    {
        return view('livewire.news',['users'=>ModelsNews::all()]);
    }
}
