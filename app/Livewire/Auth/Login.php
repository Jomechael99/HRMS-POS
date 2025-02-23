<?php

namespace App\Livewire\Auth;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Masmerise\Toaster\Toaster;

class Login extends Component
{

    public $email;
    public $password;

    protected $rules = [
        "email"=> "required|email",
        "password"=> "required"
    ];

    public function login() {

        $this->validate();

        try {

            $credentials = [
                'email' => $this->email,
                'password'=> $this->password
            ];

            if (Auth::attempt($credentials)) {

                session()->regenerate();

                Toaster::success("Login Success");

                Log::info(Auth::user()->email . " Logged In");

                $this->js("
                    setTimeout(() => {
                        window.location.href = '/';
                    }, 2000); // 2-second delay to show the toaster
                ");

            } else {
                Toaster::error('Login Failed');
                Log::error('Login Failed');
                return redirect()->back()->with('error', 'Login Failed');
            }

        } catch (\Exception $e) {
            log::error($e->getMessage());
            return redirect()->back()->with('error', $e->getMessage());
        }

    }

    public function render()
    {
        return view('livewire.auth.login')
            ->layout('layouts.guest');
    }
}
