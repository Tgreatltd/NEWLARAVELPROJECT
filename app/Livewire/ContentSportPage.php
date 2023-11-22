<?php

namespace App\Livewire;

use App\Models\Sports;
use Livewire\Component;

class ContentSportPage extends Component
{
    public $sportId, $id;
    public function mount($id)
    {
        $this->id = $id;
        $this->sportId = Sports::find($id);
    }
    public function render()
    {
        return view('livewire.content-sport-page');
    }
}
