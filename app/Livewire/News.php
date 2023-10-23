<?php

namespace App\Livewire;

use App\Models\News as ModelsNews;
use Livewire\Component;

class News extends Component
{
    public $storyId, $id;
    public function mount($id)
    {
        $this->id = $id;
        $this->storyId = ModelsNews::find($id);
    }
    public function render()
    {
        return view('livewire.news');
    }
}
