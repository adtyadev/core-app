<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Crypt;

class Posts extends Component
{
    public function render()
    {
        return view('livewire.posts');
    }
}
