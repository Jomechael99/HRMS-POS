<?php

namespace App\Livewire\Admin\Services;

use App\Models\Room;
use App\Models\RoomType;
use App\Models\Service;
use Illuminate\Support\Facades\Log;
use Livewire\Component;
use Livewire\WithFileUploads;
use Masmerise\Toaster\Toaster;

class Edit extends Component
{
    use WithFileUploads;

    public $name = '';
    public $description = '';
    public $price = '';
    public $id = '';
    public $media = '';

    protected $rules = [
        'name'=>'required',
        'price' => 'required',
    ];

    public function mount($id) {

        $data = Service::findOrFail($id);
        $this->id = $data->id;
        $this->name = $data->name;
        $this->description = $data->description;
        $this->price = $data->price;

    }

    public function update() {
        $this->validate();

        $data = Service::findOrFail($this->id);
        $data->update([
            'name' => $this->name,
            'description' => $this->description,
            'price' => $this->price
        ]);

        if ($this->media) {
            // Remove old media
            $data->clearMediaCollection('images');
            // Add new media
            $data->addMedia($this->media->getRealPath())
                ->toMediaCollection('images');
        }

        session()->flash('message', 'Service Updated successfully');
        Toaster::success("Service Updated Success");
        Log::info("Service Updated");

        $this->js("
            setTimeout(() => {
                window.location.href = '/admin/services';
            }, 1000); // 1-second delay to show the toaster
        ");
    }

    public function render()
    {
        return view('livewire.admin.services.edit')
            ->layout('layouts.main');
    }
}
