<?php

namespace App\Livewire\Components\Modal;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginModal extends Component
{

    public $email;
    public $password;

    protected $rules = [
        "email"=> "required|email",
        "password"=> "required"
    ];

    public function signin() {


        try {
            $this->validate();

            $credentials = [
                'email' => $this->email,
                'password'=> $this->password
            ];

            if (Auth::attempt($credentials)) {
                session()->regenerate();
                return redirect('/');
            } else {
                $this->addError('info', 'Invalid credentials');
            }

        } catch (\Exception $e) {

        }



    }

    public function render()
    {
        return view('components.modal.login-modal');
    }
}
