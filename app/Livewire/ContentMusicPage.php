<?php

namespace App\Livewire;

use App\Models\Musicblogger;
use Livewire\Component;

class ContentMusicPage extends Component
{

    public $musicId, $id;
    public function mount($id)
    {
        $this->id = $id;
        $this->musicId = Musicblogger::find($id);
    }
    public function render()
    {
        return view('livewire.content-music-page');
    }
}
