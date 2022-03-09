<?php
namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Laravel\Fortify\Contracts\UpdatesUserProfileInformation;

class UpdateProfileInformationForm extends Component
{
    use WithFileUploads;

    public $state = [];

    public $avatar;

    protected $listeners = [
        'refreshUpdateProfileForm' => '$refresh',
    ];

    public function mount()
    {
        $this->state = Auth::user()->withoutRelations()->toArray();
    }

    public function updateProfileInformation(UpdatesUserProfileInformation $updater)
    {
        $this->resetErrorBag();

        if($this->avatar) {
            $this->user->clearMediaCollection('avatars');
            $this->validate([
                'avatar' => 'image|max:5000', // 5MB Max
            ]);
            $this->user->addMedia($this->avatar->path())->toMediaCollection('avatars');
        }

        $updater->update($this->user, $this->state);
        $this->emit('saved');
        $this->emit('refreshUpdateProfileForm');
    }

    public function deleteProfilePhoto()
    {
        $this->user->clearMediaCollection('avatars');
        $this->emit('refreshUpdateProfileForm');
    }

    public function getUserProperty()
    {
        return Auth::user();
    }

    public function render()
    {
        return view('livewire.update-profile-information-form');
    }
}
