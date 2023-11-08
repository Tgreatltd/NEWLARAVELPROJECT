<?php

namespace App\Livewire;

use App\Models\Blogger;
use Livewire\Component;

class EditStoryAdmin extends Component
{
    public $id, $storyId, $user;

    public function mount($id)
    {
        $this->id = $id;
        $this->storyId = Blogger::find($id);
    }
    public function update()
    {
        $this->validate([
            'title' =>'required|string',
            'description' =>'required|string',
        ]);
        // $this->id = $id;
        // $this->user=Blogger::find($id);

        // if ($this->user) {
        //   $this->user->title=['title'] ;
        //   $this->user->description=['description'] ;
        //   $this->user->save();
        // }
    }

    public function render()
    {
        return view('livewire.edit-story-admin');
    }
}
