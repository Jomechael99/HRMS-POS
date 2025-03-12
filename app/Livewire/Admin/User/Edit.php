<?php

namespace App\Livewire\Admin\User;

use App\Models\Room;
use App\Models\RoomType;
use App\Models\Service;
use App\Models\User;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\Rule;
use Livewire\Component;
use Livewire\WithFileUploads;
use Masmerise\Toaster\Toaster;

class Edit extends Component
{
    public $first_name;
    public $last_name;
    public $email;
    public $username;
    public $id;


    protected function rules()
    {
        return [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => [
                'required',
                'email',
                Rule::unique('users')->ignore($this->id),
            ],
            'username' => [
                'required',
                Rule::unique('users')->ignore($this->id),
            ],
        ];
    }
    public function mount($id) {

        $data = User::findOrFail($id);
        $this->first_name = $data->first_name;
        $this->last_name = $data->last_name;
        $this->email = $data->email;
        $this->username = $data->username;
    }

    public function update() {
        $this->validate();

        $data = User::findOrFail($this->id);
        $data->update([
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'email' => $this->email,
            'username' => $this->username,
        ]);

/*        if ($this->media) {
            // Remove old media
            $data->clearMediaCollection('images');
            // Add new media
            $data->addMedia($this->media->getRealPath())
                ->toMediaCollection('images');
        }
*/
        session()->flash('message', 'User Updated successfully');
        Toaster::success("User Updated Success");
        Log::info("User Updated");

        $this->js("
            setTimeout(() => {
                window.location.href = '/admin/user';
            }, 1000); // 1-second delay to show the toaster
        ");
    }

    public function render()
    {
        return view('livewire.admin.user.edit')
            ->layout('layouts.main');
    }
}
