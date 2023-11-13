<?php

namespace App\Livewire;

use App\Models\Sports;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\WithFileUploads;

class EditSportAdmin extends Component
{
    use WithFileUploads;
    public $id, $sportId, $title, $description, $storyline, $image;
    public function mount($id){
     $this->$id=$id;
     $this->sportId= Sports::find($id);
     $this->title=$this->sportId->title;
     $this->description=$this->sportId->description;
     $this->storyline=$this->sportId->storyline;
     
    }

    public function update(){
        $data = $this->validate([
            'title' => 'required|string',
            'description' => 'required|string',
            'storyline' => 'required|string',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        
        if ($this->sportId) {
          if ($this->image) {
            $imagePath = $this->image->store('images', 'public');
            $this->sportId->image=$imagePath;
          }

          $this->sportId->title= $data['title'];
          $this->sportId->description= $data['description'];
          $this->sportId->storyline= $data['storyline'];
          $this->sportId->save();
          session()->flash('success', 'Updated successfully');
        return redirect()->back(); // Redirect to a specific route after the update.
        }
    }


    public function render()
    {
        return view('livewire.edit-sport-admin');
    }
}
