<?php

namespace App\Livewire;

use Livewire\Attributes\Js;
use Livewire\Component;

class HomeComponent extends Component
{
    public function render()
    {

        // $this->dispatch('swal',
        //     ['title' => 'Hello', 'text' => 'World', 'icon' => 'info']
        // );
        return view('livewire.home-component');
    }
}
