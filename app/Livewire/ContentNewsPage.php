<?php

namespace App\Livewire;

use App\Models\News;
use Livewire\Component;

class ContentNewsPage extends Component
{
    public $newsId, $id;
    public function mount($id)
    {
        $this->id = $id;
        $this->newsId = News::find($id);
    }
    public function render()
    {
        return view('livewire.content-news-page');
    }
}
