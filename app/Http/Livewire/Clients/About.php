<?php

namespace App\Http\Livewire\Clients;

use Livewire\Component;

class About extends Component
{
    public function render()
    {
        return view('livewire.clients.about')->extends('layouts.app')->section('content');
    }
}
