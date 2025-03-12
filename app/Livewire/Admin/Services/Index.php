<?php

namespace App\Livewire\Admin\Services;

use App\Models\RoomType;
use App\Models\Service;
use Illuminate\Support\Facades\Log;
use Livewire\Component;
use Masmerise\Toaster\Toaster;

class Index extends Component
{
    public $id;

    public function delete($id) {
        $data = Service::findOrFail($id);
        $data->delete();

        session()->flash('message', 'Service Delete successfully');
        Toaster::success("Service Delete Success");
        Log::info("Service Deleted");

        $this->js("
                    setTimeout(() => {
                        window.location.href = '/admin/service';
                    }, 1000); // 1-second delay to show the toaster
                ");
    }

    public function render()
    {

        $services = Service::with('media')->latest()->paginate(10);

        return view('livewire.admin.services.index',
        [
            'services' => $services
        ])
            ->layout('layouts.main');
    }
}
