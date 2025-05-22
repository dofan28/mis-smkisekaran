<?php

namespace App\Livewire\Admin\Gallery;

use App\Models\Galleries;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Detail Galeri | SMK ISLAM SEKARAN - Jalan Raya Sekaran, 01, Sekaran Lamongan')]
#[Layout('components.layouts.dashboard')]
class Show extends Component
{
    public Galleries $gallery;

    public function render()
    {
        return view('livewire.admin.gallery.show', [
            'header' => 'Detail Galeri',
        ]);
    }

}
