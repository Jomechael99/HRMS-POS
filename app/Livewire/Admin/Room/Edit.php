<?php

namespace App\Livewire\Admin\Room;

use App\Models\Room;
use Illuminate\Support\Facades\Log;
use Livewire\Component;
use Livewire\WithFileUploads;
use Masmerise\Toaster\Toaster;

class Edit extends Component
{
    use WithFileUploads;

    public $id;
    public $name;
    public $description;
    public $media;
    public $price;
    public $is_featured = false;

    protected $rules = [
        'name' => ['required'],
        'price' => ['required'],
    ];


    public function mount($id) {
        $data = Room::findOrFail($id);
        $this->id = $data->id;
        $this->name = $data->name;
        $this->description = $data->description;
        $this->price = $data->price;
        $this->is_featured = $data->is_featured;
    }

    public function update()
    {
        $this->validate();

        $data = Room::findOrFail($this->id);
        $data->update([
            'name' => $this->name,
            'description' => $this->description,
            'price' => $this->price,
            'is_featured' => $this->is_featured,
        ]);

        if ($this->media) {
            // Remove old media
            $data->clearMediaCollection('images');
            // Add new media
            $data->addMedia($this->media->getRealPath())
                ->toMediaCollection('images');
        }

        session()->flash('message', 'Room Update successfully');
        Toaster::success("Room Update Success");
        Log::info("Room Updated");

        $this->js("
                    setTimeout(() => {
                        window.location.href = '/admin/room';
                    }, 1000); // 1-second delay to show the toaster
                ");
    }

    public function render()
    {
        return view('livewire.admin.room.edit')
            ->layout('layouts.main');
    }
}
