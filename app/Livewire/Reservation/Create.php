<?php

namespace App\Livewire\Reservation;

use App\Livewire\Guest\Reservations;
use App\Models\Reservation;
use App\Models\reservation_services;
use App\Models\Room;
use App\Models\Service;
use Carbon\Carbon;
use Illuminate\Support\Facades\Log;
use Livewire\Component;
use Masmerise\Toaster\Toaster;

class Create extends Component
{

    public $room;
    public string $dateRange = '';

    public $servicesData;


    protected $rules = [
        'room' => 'required',
    ];


    public function updateDateRange($data)
    {
        $this->dateRange = $data['dateRange'];
    }



    public function create() {

        $this->validate();

        $checkIn = Carbon::createFromFormat('Y-m-d', explode(' to ', $this->dateRange)[0])->format('Y-m-d');
        $checkOut = Carbon::createFromFormat('Y-m-d', explode(' to ', $this->dateRange)[1])->format('Y-m-d');

        try {

            $data = Reservation::create([
                'user_id' => auth()->id(),
                'room_id' => $this->room,
                'is_paid' => false,
                'is_discharge' => false,
                'check_in' => Carbon::parse($checkIn)->format('Y-m-d'),
                'check_out' => Carbon::parse($checkOut)->format('Y-m-d'),
            ]);

            foreach ($this->servicesData as $service) {
                reservation_services::create([
                    'reservation_id' => $data->id,
                    'service_id' => $service
                ]);
            }

            session()->flash('message', 'Room created successfully');
            Toaster::success("Room Creation Success");
            Log::info("Room Created");

            $this->js("
                    setTimeout(() => {
                        window.location.href = '/reservations';
                    }, 1000); // 1-second delay to show the toaster
        ");
        } catch (\Exception $e) {
            dd($e);
            session()->flash('message', 'Room creation failed');
            Toaster::error("Room Creation Failed");
            Log::error("Room Creation Failed");
        }


    }


    public function render()
    {
        $rooms = Room::all();
        $services = Service::all();

        return view('livewire.reservation.create', [
            'rooms' => $rooms,
            'services' => $services
        ])->layout('layouts.guest');
    }
}
