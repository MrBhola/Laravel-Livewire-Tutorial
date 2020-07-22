<?php

namespace App\Http\Livewire;

use Livewire\Component;

class HelloLivewire extends Component
{
    public $name, $age, $test = [], $status = false;
    public function render()
    {
        return view('livewire.hello-livewire');
    }
}
