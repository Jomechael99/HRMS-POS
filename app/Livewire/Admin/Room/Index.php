<?php

namespace App\Livewire\Admin\Room;

use App\Models\Room;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithPagination;
use Masmerise\Toaster\Toaster;

class Index extends Component
{
    use WithPagination;

    public function delete($id) {

        $room = Room::findOrFail($id);
        $room->delete();

        session()->flash('message', 'Room Type Delete successfully');
        Toaster::success("Room Type Delete Success");
        Log::info("Room Deleted");

        $this->js("
                    setTimeout(() => {
                        window.location.href = '/admin/roomtype';
                    }, 1000); // 1-second delay to show the toaster
                ");
    }

    public function render()
    {

        $data = Room::latest()->paginate(10);

        return view('livewire.admin.room.index', [
            'data' => $data
        ])
            ->layout('layouts.main');
    }
}
