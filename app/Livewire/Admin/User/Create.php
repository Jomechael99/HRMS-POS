<?php

namespace App\Livewire\Admin\User;

use App\Models\User;
use Illuminate\Support\Facades\Log;
use Livewire\Component;
use Masmerise\Toaster\Toaster;

class Create extends Component
{

    public $first_name;
    public $last_name;
    public $email;
    public $password;
    public $username;

    protected $rules = [
        'first_name' => 'required',
        'last_name' => 'required',
        'email' => 'required|email|unique:users',
        'username' => 'required|unique:users',
        'password' => 'required|min:8',
    ];


    public function create() {

        $this->validate();

        $data = User::create([
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'email' => $this->email,
            'username' => $this->username,
            'password' => bcrypt($this->password),
        ]);

        $data->assignRole('employee');

/*        $data->addMedia($this->media->getRealPath())
            ->toMediaCollection('images');*/


        session()->flash('message', 'User Created successfully');
        Toaster::success("User Creation Success");
        Log::info("User Created");

        $this->js("
                    setTimeout(() => {
                        window.location.href = '/admin/user';
                    }, 1000); // 1-second delay to show the toaster
                ");

    }

    public function render()
    {
        return view('livewire.admin.user.create')
            ->layout('layouts.main');
    }
}
