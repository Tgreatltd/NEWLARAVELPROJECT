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

    public function update($id)
    {
        $data = $this->validate([
            'title' => 'required|string',
            'description' => 'required|string',
        ]);
    
        $user = Blogger::find($id);
    
        if ($user) {
            $user->title = $data['title'];
            $user->description = $data['description'];
            $user->save();
        }
    
        return redirect()->route('editStoriesadmin'); // Redirect to a specific route after the update.
    }

    public function render()
    {
        return view('livewire.edit-story-admin');
    }
}
