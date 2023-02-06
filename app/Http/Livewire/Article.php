<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Article extends Component
{
    public function render()
    {
        return view('livewire.article')->layout('layout.app')->slot('main');
    }
}
