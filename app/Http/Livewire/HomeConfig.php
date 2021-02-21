<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;

class HomeConfig extends Component
{

    use WithFileUploads;
    public $featuredImage;

    public function render()
    {
        return view('livewire.home-config');
    }

    public function store()
    {
        dd("hello");
    }
}
