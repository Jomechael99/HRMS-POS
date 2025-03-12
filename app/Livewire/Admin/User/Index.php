<?php

namespace App\Livewire\Admin\User;

use App\Models\RoomType;
use App\Models\Service;
use App\Models\User;
use Illuminate\Support\Facades\Log;
use Livewire\Component;
use Masmerise\Toaster\Toaster;

class Index extends Component
{
    public $id;

    public function delete($id) {
        $data = User::findOrFail($id);
        $data->delete();

        session()->flash('message', 'User Delete successfully');
        Toaster::success("User Delete Success");
        Log::info("User deleted");

        $this->js("
                    setTimeout(() => {
                        window.location.href = '/admin/user';
                    }, 1000); // 1-second delay to show the toaster
                ");
    }

    public function render()
    {

        $user = User::with('roles')->latest()->paginate(10);

        return view('livewire.admin.user.index',
            [
                'users' => $user
            ])
            ->layout('layouts.main');
    }
}
