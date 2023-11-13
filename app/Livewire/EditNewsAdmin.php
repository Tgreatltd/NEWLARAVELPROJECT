<?php

namespace App\Livewire;

use App\Models\News;
use Livewire\Component;

class EditNewsAdmin extends Component
{
    public $id, $title, $description, $newsId, $storyline, $image;
public function mount($id){
 $this->id=$id;
 $this->newsId= News::find($id);
}

    public function render()
    {
        return view('livewire.edit-news-admin');
    }
}
