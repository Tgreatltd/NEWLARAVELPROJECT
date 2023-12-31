<?php

namespace App\Livewire;

use App\Models\Blogger;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\WithFileUploads;

class Adminpage extends Component
{
    use WithFileUploads;
    public $storyline, $title, $description, $image, $imageName, $id, $deleteId;
    
    public function saveImage()
    {
        $this->validate([
            'title' => 'required|string',
            'storyline' => 'required|string',
            'description' => 'required|string',
             'image' => 'image|max:1024' // Adjust validation rules as needed
        ]);

        $this->imageName = $this->image->store('images', 'public');

        Blogger::create([
            'title' => $this->title,
            'storyline' => $this->storyline,
            'description' => $this->description,
            'image' => $this->imageName,
        ]);

        $this->reset('image');
        session()->flash('success', 'uploaded successfully');
    }

    public function delete($id){

     $this->deleteId=Blogger::find($id);
     if ($this->deleteId) {
        $this->deleteId->delete();
        session()->flash('deleted', 'Content deleted successfully.');
     }

    }

    public function render()
    {
        return view('livewire.adminpage', ['contents'=>Blogger::all()]);
    }
}
