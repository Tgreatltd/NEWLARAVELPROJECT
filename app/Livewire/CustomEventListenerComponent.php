<?php

namespace App\Livewire;

use Livewire\Component;

class CustomEventListenerComponent extends Component
{

    public $receivedMessage = '';

    protected $listeners = ['customEvent' => 'handleCustomEvent'];

    public function handleCustomEvent($message)
    {
        $this->receivedMessage = $message;
    }


    public function render()
    {
        return view('livewire.custom-event-listener-component');
    }
}
