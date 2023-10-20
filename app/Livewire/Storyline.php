<?php

namespace App\Livewire;

use App\Models\Blogger;
use Livewire\Component;

class Storyline extends Component

{
   public $storyId;
public function mount($id){
 $this->storyId=Blogger::find($id);
}

    public function render()
    {
        return view('livewire.storyline');
    }
}
