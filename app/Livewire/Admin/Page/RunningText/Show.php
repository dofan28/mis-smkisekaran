<?php

namespace App\Livewire\Admin\Page\RunningText;

use App\Models\Pages;
use Livewire\Component;
use Livewire\Attributes\Title;
use Livewire\Attributes\Layout;

#[Title('Detail Halaman Teks Berjalan | SMK ISLAM SEKARAN - Jalan Raya Sekaran, 01, Sekaran Lamongan')]
#[Layout('components.layouts.dashboard')]
class Show extends Component
{
    public Pages $pageRunningText;

    public function render()
    {
        return view('livewire.admin.page.running-text.show', [
            'header' => 'Detail Halaman Teks Berjalan'
        ]);
    }
}
