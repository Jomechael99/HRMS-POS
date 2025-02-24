<?php

namespace App\Livewire\Admin\Room;

use App\Models\Room;
use Illuminate\Support\Facades\Log;
use Livewire\Component;
use Masmerise\Toaster\Toaster;

class Edit extends Component
{

    public $id;
    public $name;
    public $description;

    protected $rules = [
        'name' => ['required']
    ];


    public function mount($id) {
        $data = Room::findOrFail($id);
        $this->id = $data->id;
        $this->name = $data->name;
        $this->description = $data->description;
    }

    public function update()
    {
        $this->validate();

        $post = Room::findOrFail($this->id);
        $post->update([
            'name' => $this->name,
            'description' => $this->description,
        ]);

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
