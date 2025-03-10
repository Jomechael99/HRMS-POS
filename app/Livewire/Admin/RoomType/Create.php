<?php

namespace App\Livewire\Admin\RoomType;

use App\Models\Room;
use App\Models\RoomType;
use Illuminate\Support\Facades\Log;
use Livewire\Component;
use Masmerise\Toaster\Toaster;

class Create extends Component
{

    public $selectedOption = '';
    public $options = [];
    public $name = '';
    public $description = '';
    public $price = '';

    protected $rules = [
        'selectedOption' => 'required',
        'name'=>'required',
        'price' => 'required'
    ];

    public function create() {

        $this->validate();

        RoomType::create([
            'room_id' => $this->selectedOption,
            'name' => $this->name,
            'description' => $this->description,
            'price' => $this->price
        ]);

        session()->flash('message', 'Room created successfully');
        Toaster::success("Room Creation Success");
        Log::info("Room Type Created");

        $this->js("
                    setTimeout(() => {
                        window.location.href = '/admin/roomtype';
                    }, 1000); // 1-second delay to show the toaster
                ");

    }

    public function mount() {
        $this->options = Room::pluck('name', 'id')->toArray();
    }

    public function render()
    {
        return view('livewire.admin.room-type.create')
            ->layout('layouts.main');
    }
}
