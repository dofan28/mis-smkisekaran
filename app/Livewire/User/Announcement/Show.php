<?php

namespace App\Livewire\User\Announcement;

use App\Models\Announcement;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Detail Pengumuman | SMK ISLAM SEKARAN - Jalan Raya Sekaran, 01, Sekaran Lamongan')]
class Show extends Component
{
    public Announcement $announcement;
    public $loadAnnouncements = 5;

    public function loadMoreAnnouncements()
    {
        $this->loadAnnouncements += 5;
    }

    public function render()
    {
        return view('livewire.user.announcement.show', [
            'announcements' => Announcement::latest()->take($this->loadAnnouncements)->get(),
            'all_announcements' => Announcement::latest()->get()
        ]);
    }
}
