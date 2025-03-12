<?php

namespace App\Livewire\Guest;

use Livewire\Component;

class OurRooms extends Component
{
    public function render()
    {
        return view('livewire.guest.our-rooms')
            ->layout('layouts.guest');
    }
}
