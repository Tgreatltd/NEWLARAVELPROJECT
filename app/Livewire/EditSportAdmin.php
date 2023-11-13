<?php

namespace App\Livewire;

use App\Models\Sports;
use Livewire\Component;

class EditSportAdmin extends Component
{
    public $id, $sportId, $title, $description, $storyline;
    public function mount($id){
     $this->$id=$id;
     $this->sportId= Sports::find($id);
     $this->title=$this->sportId->title;
     $this->description=$this->sportId->description;
     $this->storyline=$this->sportId->storyline;
     
    }


    public function render()
    {
        return view('livewire.edit-sport-admin');
    }
}
