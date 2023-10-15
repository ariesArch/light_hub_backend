<?php

namespace App\Http\Livewire\UserCommunity;

use App\Models\Community;
use App\Models\User;
use App\Models\UserCommunity;
use Livewire\Component;

class UserCommunityForm extends Component
{
    public UserCommunity $userCommunity;
    public $users;
    public $communities;

    public function mount(UserCommunity $userCommunity): void
    {
        $this->userCommunity = $userCommunity;
        $this->users = User::all();
        $this->communities= Community::all();
    }

    protected function rules(): array
    {
        return [
            'userCommunity.user_id' => ['required'],
            'userCommunity.community_id' => ['required'],
        ];
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function submit()
    {
        $this->validate();
        $this->userCommunity->save();
        return redirect()->route('user_communities.index');
    }
    
    public function render()
    {
        return view('livewire.user-community.user-community-form');
    }
}
