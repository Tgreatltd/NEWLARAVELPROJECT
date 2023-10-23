<?php

namespace App\Livewire;

use App\Models\Sports as ModelsSports;
use Livewire\Component;

class Sports extends Component
{
    public $storyId, $id;
    public function mount($id){
        $this->id = $id;
     $this->storyId=ModelsSports::find($id);
    }
    public function render()
    {
        return view('livewire.sports');
    }
}
