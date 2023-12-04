<?php

namespace App\Livewire;

use App\Models\Sports;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\WithFileUploads;

class Sportadmin extends Component
{
    use WithFileUploads;
    public $storyline, $title, $description, $image, $imageName;
    
    public function saveImage() 
    {
        $this->validate([
            'title' => 'required|string',
            'storyline' => 'required|string',
            'description' => 'required|string',
             'image' => 'image|max:1024' // Adjust validation rules as needed
        ]);

        $this->imageName = $this->image->store('images', 'public');

        Sports::create([
            'title' => $this->title,
            'storyline' => $this->storyline,
            'description' => $this->description,
            'image' => $this->imageName,
        ]); 

        $this->reset('image');
        session()->flash('success', 'uploaded successfully');
    }

    public function render()
    {
        return view('livewire.sportadmin', ['contents'=>Sports::all()]); 
    } 
}
