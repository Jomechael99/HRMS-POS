<?php

namespace App\Livewire\Admin\Services;

use App\Models\RoomType;
use App\Models\Service;
use Illuminate\Support\Facades\Log;
use Livewire\Component;
use Livewire\WithFileUploads;
use Masmerise\Toaster\Toaster;

class Create extends Component
{
    use WithFileUploads;

    public $name;
    public $description;
    public $price;
    public $media;

    protected $rules = [
        'name' => 'required',
        'price' => 'required',
        'media' => 'required|image|max:1024',
    ];

    public function create() {

        $this->validate();

        $data = Service::create([
            'name' => $this->name,
            'description' => $this->description,
            'price' => $this->price
        ]);

        $data->addMedia($this->media->getRealPath())
            ->toMediaCollection('images');


        session()->flash('message', 'Room created successfully');
        Toaster::success("Room Creation Success");
        Log::info("Room Type Created");

        $this->js("
                    setTimeout(() => {
                        window.location.href = '/admin/services';
                    }, 1000); // 1-second delay to show the toaster
                ");

    }

    public function render()
    {
        return view('livewire.admin.services.create')
            ->layout('layouts.main');
    }
}
