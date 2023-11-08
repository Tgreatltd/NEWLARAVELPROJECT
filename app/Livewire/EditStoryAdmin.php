<?php

namespace App\Livewire;

use App\Models\Blogger;
use Livewire\Component;

class EditStoryAdmin extends Component
{
    public $id, $storyId, $user, $title, $description, $storyline, $existingValue;

    public function mount($id)
    {
        $this->id = $id;
        $this->storyId = Blogger::find($id);
        $this->title=$this->storyId->title;
        $this->description=$this->storyId->description;
        $this->storyline=$this->storyId->storyline;
    }

    public function update()
{
    $data = $this->validate([
        'title' => 'required|string',
        'description' => 'required|string',
        'storyline' => 'required|string',
    ]);

    if ($this->storyId) {
        $this->storyId->title = $data['title'];
        $this->storyId->description = $data['description'];
        $this->storyId->save();
    }
    session()->flash('success', 'Updated successfully');
    return redirect()->back(); // Redirect to a specific route after the update.
}

    public function render()
    {
        return view('livewire.edit-story-admin');
    }
}
