<?php

namespace App\Livewire;

use App\Models\News as ModelsNews;
use Livewire\Component;

class News extends Component
{
    
    public function render()
    {
        return view('livewire.news');
    }
}
