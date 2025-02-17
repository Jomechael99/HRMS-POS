<?php

namespace App\Livewire\Navigation;

use Livewire\Component;

class GuestNavBar extends Component
{
    public function render()
    {
        return view('navigation.guest-nav-bar')
            ->layout('layouts.guest');
    }
}
