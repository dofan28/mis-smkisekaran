<?php

namespace App\Livewire\User\Event;

use App\Models\Events;
use Livewire\Component;
use Livewire\Attributes\Title;

#[Title('Detail Kegiatan | SMK ISLAM SEKARAN - Jalan Raya Sekaran, 01, Sekaran Lamongan')]
class Show extends Component
{
    public Events $event;
    public $loadEvents = 5;

    public function loadMoreEvents()
    {
        $this->loadEvents += 5;
    }

    public function render()
    {
        return view('livewire.user.event.show',[
            'events' => Events::latest()->take($this->loadEvents)->get(),
            'all_events' => Events::latest()->get()
        ]);
    }
}
