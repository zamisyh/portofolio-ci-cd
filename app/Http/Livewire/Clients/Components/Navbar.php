<?php

namespace App\Http\Livewire\Clients\Components;

use Livewire\Component;

class Navbar extends Component
{
    public $theme = 'light';

    public function render()
    {
        return view('livewire.clients.components.navbar')->extends('layouts.app')->section('content');
    }

    public function updatedTheme()
    {
        $this->emit('renderingTheme', $this->theme);
    }
}
