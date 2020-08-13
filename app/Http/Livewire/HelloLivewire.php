<?php

namespace App\Http\Livewire;

use Livewire\Component;

class HelloLivewire extends Component
{
    public $name = "Robert";
    public function render()
    {
        return view('livewire.hello-livewire');
    }
}
