<?php

namespace App\Livewire\Navigation;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class AdminNavBar extends Component
{

    public function logout() {
        Auth::logout();
        session()->invalidate();
        session()->regenerateToken();
        return redirect('/');
    }

    public function render()
    {
        return view('navigation.admin-nav-bar');
    }
}
