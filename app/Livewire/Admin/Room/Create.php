<?php

namespace App\Livewire\Admin\Room;

use App\Models\Room;
use Illuminate\Support\Facades\Log;
use Livewire\Component;
use Masmerise\Toaster\Toaster;

class Create extends Component
{

    public $name = '';
    public $description = '';
    public $roomId = null;

    protected $rules = [
        'name' => 'required',
    ];

    public function create() {

        $this->validate();

        Room::create([
            'name' => $this->name,
            'description' => $this->description
        ]);

        session()->flash('message', 'Room created successfully');
        Toaster::success("Room Creation Success");
        Log::info("Room Created");

        $this->js("
                    setTimeout(() => {
                        window.location.href = '/admin/room';
                    }, 1000); // 1-second delay to show the toaster
                ");
    }

    public function render()
    {
        return view('livewire.admin.room.create')
            ->layout('layouts.main');
    }
}
