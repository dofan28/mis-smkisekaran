<?php

namespace App\Livewire\Admin\Page\ImageSlider;

use App\Models\Pages;
use Livewire\Component;
use Livewire\Attributes\Title;
use Livewire\Attributes\Layout;

#[Title('Detail Halaman Gambar Slider | SMK ISLAM SEKARAN - Jalan Raya Sekaran, 01, Sekaran Lamongan')]
#[Layout('components.layouts.dashboard')]
class Show extends Component
{
    public Pages $pageImageSlider;

    public function render()
    {
        return view('livewire.admin.page.image-slider.show', [
            'header' => 'Detail Halaman Gambar Slider'
        ]);
    }
}
