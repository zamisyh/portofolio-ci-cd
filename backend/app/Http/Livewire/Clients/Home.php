<?php

namespace App\Http\Livewire\Clients;

use Livewire\Component;

class Home extends Component
{

    // public $themes;
    // protected $listeners = ['renderingTheme', 'getValueTheme'];

    public function render()
    {
        return view('livewire.clients.home')->extends('layouts.app')->section('content');
    }

    // public function getValueTheme($theme)
    // {
    //     $this->themes = $theme;
    // }
}
