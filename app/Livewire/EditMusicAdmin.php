<?php

namespace App\Livewire;

use App\Models\Musicblogger;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\WithFileUploads;

class EditMusicAdmin extends Component
{
    use WithFileUploads;
    public $id, $title, $description, $storyline, $image, $musicId;
    public function mount($id)
    {
        $this->$id = $id;
        $this->musicId = Musicblogger::find($id);
        $this->title = $this->musicId->title;
        $this->description = $this->musicId->description;
        $this->storyline = $this->musicId->storyline;
        $this->image = $this->musicId->image;
    }

    public function update()
    {
        $data = $this->validate([
            'title' => 'required|string',
            'description' => 'required|string',
            'storyline' => 'required|string',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($this->musicId) {
            if ($this->image) {
                $imagePath = $this->image->store('images', 'public');
                $this->musicId->image = $imagePath;
            }

            $this->musicId->title=$data['title'];
            $this->musicId->description=$data['description'];
            $this->musicId->storyline=$data['storyline'];
            $this->musicId->save();

            session()->flash('success', 'Updated successfully');
            return redirect()->back(); // Redirect to a specific route after the update.
        } 
    }

    public function render()
    {
        return view('livewire.edit-music-admin');
    }
}
