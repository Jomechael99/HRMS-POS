<?php

namespace App\Livewire\Guest;

use Livewire\Component;

class Reservations extends Component
{
    public function render()
    {
        return view('livewire.guest.reservations')
            ->layout('layouts.guest');
    }
}
