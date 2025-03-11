<?php

namespace App\Livewire\Admin\RoomType;

use App\Models\Room;
use App\Models\RoomType;
use Illuminate\Support\Facades\Log;
use Livewire\Component;
use Masmerise\Toaster\Toaster;

class Edit extends Component
{

    public $selectedOption = '';
    public $options = [];
    public $name = '';
    public $description = '';
    public $price = '';
    public $id = '';

    protected $rules = [
        'selectedOption' => 'required',
        'name'=>'required',
        'price' => 'required'
    ];

    public function mount($id) {
        $data = RoomType::findOrFail($id);
        $this->id = $data->id;
        $this->name = $data->name;
        $this->description = $data->description;
        $this->selectedOption = $data->room_id; // Assuming room_id is the foreign key
        $this->price = $data->price;

        $this->options = Room::pluck('name', 'id')->toArray();
    }

    public function update() {
        $this->validate();

        $data = RoomType::findOrFail($this->id);
        $data->update([
            'room_id' => $this->selectedOption,
            'name' => $this->name,
            'description' => $this->description,
            'price' => $this->price
        ]);

        session()->flash('message', 'Room Type Updated successfully');
        Toaster::success("Room Updated Success");
        Log::info("Room Type Updated");

        $this->js("
                    setTimeout(() => {
                        window.location.href = '/admin/roomtype';
                    }, 1000); // 1-second delay to show the toaster
                ");
    }

    public function render()
    {
        return view('livewire.admin.room-type.edit')
            ->layout('layouts.main');
    }
}
