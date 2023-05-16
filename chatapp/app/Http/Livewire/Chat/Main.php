<?php

namespace App\Http\Livewire\Chat;

use Livewire\Component;

class Main extends Component
{

    public $count = 0;
    public function increase()
    {
        $this->count++;
    }

    public function render()
    {
        return view('livewire.chat.main');
    }
}
