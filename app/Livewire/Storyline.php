<?php

namespace App\Livewire;

use App\Models\Blogger;
use Livewire\Component;

class Storyline extends Component

{
   public $storyId, $id;
public function mount($id){
    $this->id = $id;
 $this->storyId=Blogger::find($id);
}

    public function render()
    {
        return view('livewire.storyline');
    }
}
