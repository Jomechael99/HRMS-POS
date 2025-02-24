<?php

namespace App\Livewire\Admin\Room;

use App\Models\Room;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Livewire\Component;
use Masmerise\Toaster\Toaster;

class Index extends Component
{

    public $name = '';
    public $description = '';
    public $roomId = null;

    public function submit() {
        $this->validate();

        if ($this->roomId) {
            $room = Room::find($this->roomId);
            $room->update([
                'name' => $this->name,
                'description' => $this->description
            ]);

            session()->flash('message', 'Room updated successfully');
            Toaster::success("Room Update Success");
            Log::info("Room Updated");
        } else {
            Room::create([
                'name' => $this->name,
                'description' => $this->description
            ]);

            session()->flash('message', 'Room created successfully');
            Toaster::success("Room Creation Success");
            Log::info("Room Created");
        }

        $this->resetForm();
        $this->dispatch('keep-modal-open');
    }

    public function render()
    {

        $data = Room::orderBy('id', 'desc')->paginate(10);

        return view('livewire.admin.room.index', [
            'data' => $data
        ])
            ->layout('layouts.main');
    }
}
