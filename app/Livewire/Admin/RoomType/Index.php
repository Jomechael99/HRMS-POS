<?php

namespace App\Livewire\Admin\RoomType;

use App\Models\Room;
use App\Models\RoomType;
use Illuminate\Support\Facades\Log;
use Livewire\Component;
use Livewire\WithPagination;
use Masmerise\Toaster\Toaster;

class Index extends Component
{

    use WithPagination;

    public function delete($id) {
        $room = RoomType::findOrFail($id);
        $room->delete();

        session()->flash('message', 'Room Type Delete successfully');
        Toaster::success("Room Type Delete Success");
        Log::info("Room Type Deleted");

        $this->js("
                    setTimeout(() => {
                        window.location.href = '/admin/roomtype';
                    }, 1000); // 1-second delay to show the toaster
                ");
    }

    public function render()
    {

        $data = RoomType::with(['room', 'media'])->latest()->paginate(10);

        return view('livewire.admin.room-type.index', [
            'data' => $data
        ])
            ->layout('layouts.main');
    }
}
