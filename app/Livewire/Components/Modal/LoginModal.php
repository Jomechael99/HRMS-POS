<?php

namespace App\Livewire\Components\Modal;

use Livewire\Component;

class LoginModal extends Component
{

    public $email;
    public $password;

    protected $rules = [
        "email"=> "required|email",
        "password"=> "required|min:6"
    ];

    public function signin() {

        $this->validate();
        session()->flash('error', 'Invalid credentials');
    }

    public function render()
    {
        return view('components.modal.login-modal');
    }
}
