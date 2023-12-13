<?php

namespace App\Livewire;

use App\Models\News;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\WithFileUploads;

class EditNewsAdmin extends Component
{
    use WithFileUploads;
    public $id, $title, $description, $newsId, $storyline, $image;

    public function mount($id)
    {
        $this->id = $id;
        $this->newsId = News::find($id);
        $this->title= $this->newsId->title;
        $this->description= $this->newsId->description;
        $this->storyline= $this->newsId->storyline;
        $this->image= $this->newsId->image;
    }

    public function update()
    {
        $data = $this->validate([
            'title' => 'required|string',
            'description' => 'required|string',
            'storyline' => 'required|string',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($this->newsId) {
            if ($this->image) {
                $imagePath = $this->image->store('images', 'public');
                $this->newsId->image = $imagePath;
            }

            $this->newsId->title = $data['title'];
            $this->newsId->description = $data['description'];
            $this->newsId->storyline = $data['storyline'];
            $this->newsId->save(); 

            session()->flash('success', 'Updated successfully');
            return redirect()->back(); // Redirect to a specific route after the update.
        } 
    }

    public function render()
    {
        return view('livewire.edit-news-admin');
    }
}
