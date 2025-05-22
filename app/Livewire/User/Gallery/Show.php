<?php

namespace App\Livewire\User\Gallery;

use App\Models\Galleries;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Detail Galeri | SMK ISLAM SEKARAN - Jalan Raya Sekaran, 01, Sekaran Lamongan')]
class Show extends Component
{
    public Galleries $gallery;
    public $loadGalleries = 3;

    public function loadMoreGalleries()
    {
        $this->loadGalleries += 3;
    }

    public function render()
    {
        return view('livewire.user.gallery.show', [
            'galleries' => Galleries::latest()->take($this->loadGalleries)->get(),
            'all_galleries' => Galleries::latest()->get(),
        ]);
    }
}
