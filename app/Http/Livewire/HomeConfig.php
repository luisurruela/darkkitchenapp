<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\HomePage;

class HomeConfig extends Component
{

    use WithFileUploads;
    public $title;
    public $subtitle;
    public $logo;
    public $cover;

    public function render()
    {
        return view('livewire.home-config');
    }

    public function mount()
    {
        $homeSettings = HomePage::find(1);
        $this->title = $homeSettings->title;
        $this->subtitle = $homeSettings->subtitle;
        $this->logo = $homeSettings->logo;
        $this->cover = $homeSettings->cover;
    }

    public function store()
    {
        $this->validate([
            'title'         => 'required',
            'cover'         => 'image|max:1024',
        ]);


        $homeSettings = HomePage::find(1);
        $homeSettings->title = $this->title;
        $homeSettings->subtitle = $this->subtitle;

        if ($this->logo != 'logo.png') {
            $uploadedLogo = $this->logo->store('public');
            $homeSettings->logo = $uploadedLogo;
        }

        if ($this->cover != "cover.png") {
            $uploadedCover = $this->cover->store('public');
            $homeSettings->cover = $uploadedCover;
        }

        $homeSettings->save();
    }
}
