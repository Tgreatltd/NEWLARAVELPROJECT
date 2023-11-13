<?php

namespace App\Livewire;

use App\Models\Musicblogger;
use Livewire\Component;

class EditMusicAdmin extends Component
{
public $id, $title, $description, $storyline, $image, $musicId;
public function mount($id){
 $this->$id=$id;
 $this->musicId= Musicblogger::find($id);
}

    public function render()
    {
        return view('livewire.edit-music-admin');
    }
}
