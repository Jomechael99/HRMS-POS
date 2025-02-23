<?php

namespace App\Livewire\Navigation;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class GuestNavBar extends Component
{

    public function logout() {
        Auth::logout();
        session()->invalidate();
        session()->regenerateToken();
        return redirect('/');
    }

    public function render()
    {
        return view('navigation.guest-nav-bar')
            ->layout('layouts.guest');
    }
}
