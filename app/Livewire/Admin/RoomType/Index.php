<?php

namespace App\Livewire\Admin\RoomType;

use App\Models\RoomType;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {

        $data = RoomType::latest()->paginate(10);

        return view('livewire.admin.room-type.index', [
            'data' => $data
        ])
            ->layout('layouts.main');
    }
}
