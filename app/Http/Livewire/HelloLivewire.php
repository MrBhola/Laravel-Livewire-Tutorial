<?php

namespace App\Http\Livewire;

use Livewire\Component;

class HelloLivewire extends Component
{
    public $name = "Robert", $hydrate, $updated;
    public function render()
    {
        return view('livewire.hello-livewire');
    }

    public function mount($name)
    {
        $this->name =  $name;
    }

    public function hydrate()
    {
        $this->hydrate = "I am from Hydrate";
    }

    public function updatedUpdated()
    {
        $this->updated = "I am from Updated";
    }
}
