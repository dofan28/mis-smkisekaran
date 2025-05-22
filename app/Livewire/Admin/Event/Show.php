<?php

namespace App\Livewire\Admin\Event;

use App\Models\Events;
use Livewire\Component;
use Livewire\Attributes\Title;
use Livewire\Attributes\Layout;

#[Title('Detail Kegiatan | SMK ISLAM SEKARAN - Jalan Raya Sekaran, 01, Sekaran Lamongan')]
#[Layout('components.layouts.dashboard')]
class Show extends Component
{
    public Events $event;

    public function render()
    {
        return view('livewire.admin.event.show', [
            'header' => 'Detail Kegiatan'
        ]);
    }
}
