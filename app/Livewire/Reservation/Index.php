<?php

namespace App\Livewire\Reservation;

use App\Models\Reservation;
use App\Models\Room;
use Illuminate\Support\Facades\Log;
use Livewire\Component;
use Masmerise\Toaster\Toaster;

class Index extends Component
{

    public function delete($id) {
        $data = Reservation::findOrFail($id);
        $data->delete();

        session()->flash('message', 'Reservation Cancelled successfully');
        Toaster::success("Reservation Cancelled Success");
        Log::info("Reservation Cancelled");

        $this->js("
                    setTimeout(() => {
                        window.location.href = '/reservations/list';
                    }, 1000); // 1-second delay to show the toaster
                ");
    }

    public function render()
    {

        $reservations = Reservation::with(['room', 'user', 'services'])->latest()->where('user_id', auth()->id())->paginate(10);

        return view('livewire.reservation.index', [
            'reservations' => $reservations
        ])
            ->layout('layouts.guest');
    }
}
