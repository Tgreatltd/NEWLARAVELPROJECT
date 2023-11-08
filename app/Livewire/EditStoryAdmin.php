<?php

namespace App\Livewire;

use App\Models\Blogger;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\WithFileUploads;

class EditStoryAdmin extends Component
{
    use WithFileUploads;
    public $id, $storyId, $user, $title, $description, $storyline, $image;

    public function mount($id)
    {
        $this->id = $id;
        $this->storyId = Blogger::find($id);
        $this->title = $this->storyId->title;
        $this->description = $this->storyId->description;
        $this->storyline = $this->storyId->storyline;
        $this->image = $this->storyId->image;
    }

    public function update()
    {
        $data = $this->validate([
            'title' => 'required|string',
            'description' => 'required|string',
            'storyline' => 'required|string',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($this->storyId) {
            if ($this->image) {
                // Handle the image upload and storage
                $imagePath = $this->image->store('images', 'public');

                // Update the image path in the database
                $this->storyId->image = $imagePath;
            }


            //update the edited forms
            $this->storyId->title = $data['title'];
            $this->storyId->description = $data['description'];
            $this->storyId->storyline = $data['storyline'];
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
