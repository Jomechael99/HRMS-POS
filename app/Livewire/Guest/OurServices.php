<?php

namespace App\Livewire\Guest;

use App\Models\Service;
use Livewire\Component;

class OurServices extends Component
{
    public function render()
    {

        $services = Service::get()->take(10);

        return view('livewire.guest.our-services', ['services' => $services])
            ->layout('layouts.guest');
    }
}
