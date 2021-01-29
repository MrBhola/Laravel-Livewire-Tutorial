<?php

namespace App\Http\Livewire;

use Livewire\Component;

class HelloLivewire extends Component
{
    public $name = "Robert", $isOpenModal;
    public function render()
    {
        return view('livewire.hello-livewire');
    }
    public function new($data)
    {
        dd($data);
    }
    public function hello()
    {
        $this->isOpenModal = false;
    }
}
