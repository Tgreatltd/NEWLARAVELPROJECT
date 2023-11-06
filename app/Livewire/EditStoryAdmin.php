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
    }

    public function render()
    {
        return view('livewire.edit-story-admin');
    }
}
