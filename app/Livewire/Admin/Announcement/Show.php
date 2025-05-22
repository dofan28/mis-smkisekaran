<?php

namespace App\Livewire\Admin\Announcement;

use App\Models\Announcement;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Detail Pengumuman | SMK ISLAM SEKARAN - Jalan Raya Sekaran, 01, Sekaran Lamongan')]
#[Layout('components.layouts.dashboard')]
class Show extends Component
{
    public Announcement $announcement;

    public function render()
    {
        return view('livewire.admin.announcement.show', [
            'header' => 'Detail Pengumuman',
        ]);
    }
}
