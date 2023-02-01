<?php

namespace App\Http\Livewire;

use Livewire\Component;

class UserEdit extends Component
{
    public $user;
    public $name;
    public $email;
    public function mount($user)
    {
        $this->user = $user;
    }
    public function render()
    {
        return view('livewire.user-edit');
    }
}
