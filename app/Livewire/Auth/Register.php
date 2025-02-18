<?php

namespace App\Livewire\Auth;

use Livewire\Component;
use App\Models\User;

class Register extends Component
{

    public $first_name = '';

    public $last_name = '';

    public $email = '';

    public $username = '';

    public $password = '';

    public $password_confirmation = '';

    public $terms = '';

    protected $rules = [
        'first_name' => 'required',
        'last_name' => 'required',
        'email'=> 'required|email|unique:users',
        'username' => 'required|unique:users',
        'password'=> 'required',
        'password_confirmation' => 'required|same:password',
        'terms' => 'required'
    ];

    public function register() {

        try {

            $this->validate();

            User::create([
                'first_name'=> $this->first_name,
                'last_name'=> $this->last_name,
                'email'=> $this->email,
                'username'=> $this->username,
                'password'=> bcrypt($this->password)
            ]);

            session()->flash('success', 'Account successfully created');

            return $this->redirect('/');

        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }


    }

    public function render()
    {
        return view('livewire.auth.register')
            ->layout('layouts.guest');
    }
}
