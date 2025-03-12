<?php

namespace App\Livewire\Admin\Room;

use App\Models\Room;
use Illuminate\Support\Facades\Log;
use Livewire\Component;
use Livewire\WithFileUploads;
use Masmerise\Toaster\Toaster;

class Create extends Component
{
    use WithFileUploads;

    public $name = '';
    public $description = '';
    public $roomId = null;
    public $price = '';
    public $media = '';
    public $is_featured = false;

    protected $rules = [
        'name' => 'required',
        'price' => 'required',
        'media' => 'required|image|max:1024',
    ];

    public function create() {

        $this->validate();

        $data = Room::create([
            'name' => $this->name,
            'description' => $this->description,
            'price' => $this->price,
            'is_featured' => $this->is_featured,
        ]);

        $data->addMedia($this->media->getRealPath())
            ->toMediaCollection('images');

        session()->flash('message', 'Room created successfully');
        Toaster::success("Room Creation Success");
        Log::info("Room Created");

        $this->js("
                    setTimeout(() => {
                        window.location.href = '/admin/room';
                    }, 1000); // 1-second delay to show the toaster
                ");
    }

    public function render()
    {
        return view('livewire.admin.room.create')
            ->layout('layouts.main');
    }
}
