<?php

namespace App\Livewire;

use App\Models\Blogger;
use Livewire\Component;

class EditStoryAdmin extends Component
{
    public $id, $storyId;

    public function mount($id){
     $this->id=$id;
     $this->storyId=Blogger::find($id);

     if ($this->storyId) {
        $this->validate([
            'title' => 'required|string',
            'storyline' => 'required|string',
            'description' => 'required|string',
             'image' => 'image|max:1024' // Adjust validation rules as needed
        ]);
     }
    }

    public function render()
    {
        return view('livewire.edit-story-admin');
    }
}
