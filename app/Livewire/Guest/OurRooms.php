<?php

namespace App\Livewire\Guest;

use App\Models\Room;
use Livewire\Component;

class OurRooms extends Component
{
    public function render()
    {

        $room = Room::with(['media'])->where('is_featured', 1)->get()->take(5);

        return view('livewire.guest.our-rooms', ['rooms' => $room])
            ->layout('layouts.guest');
    }
}
