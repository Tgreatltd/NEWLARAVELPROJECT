<?php

namespace App\Livewire;

use App\Models\Music as ModelsMusic;
use Livewire\Component;

class Music extends Component
{
    public $storyId, $id;
    public function mount($id){
        $this->id = $id;
     $this->storyId=ModelsMusic::find($id);
    }
    public function render()
    {
        return view('livewire.music');
    }
}
