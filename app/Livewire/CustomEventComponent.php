<?php

namespace App\Livewire;

use Livewire\Component;

class CustomEventComponent extends Component
{

    public $message = '';

    public function triggerCustomEvent()
    {
        $this->message = 'Custom event triggered!';
        $this->emit('customEvent', $this->message);
    }

    public function render()
    {
        return view('livewire.custom-event-component');
    }
}
