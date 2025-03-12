<?php

namespace App\Livewire\Guest;

use Livewire\Component;

class OurServices extends Component
{
    public function render()
    {
        return view('livewire.guest.our-services')
            ->layout('layouts.guest');
    }
}
