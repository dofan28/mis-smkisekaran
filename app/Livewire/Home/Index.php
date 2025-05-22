<?php

namespace App\Livewire\Home;

use App\Models\Announcement;
use App\Models\Article;
use App\Models\Events;
use App\Models\Galleries;
use App\Models\Pages;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithPagination;

#[Title('SMK ISLAM SEKARAN - Jalan Raya Sekaran, 01, Sekaran Lamongan')]
class Index extends Component
{
    use WithPagination;

    public $searchAnnouncements = '';
    public $searchEvents = '';
    public $loadGalleries = 6;

    public function updatingSearchAnnouncements()
    {
        $this->resetPage('announcements-page');
    }

    public function updatingSearchEvents()
    {
        $this->resetPage('events-page');
    }

    public function loadMoreGalleries()
    {
        $this->loadGalleries += 6;
    }

    public function render()
    {
        $announcements = Announcement::search($this->searchAnnouncements)->where('status', 'active')->latest()->paginate(4, pageName: 'announcements-page');
        $events = Events::search($this->searchEvents)->latest()->paginate(6, pageName: 'events-page');

        return view('livewire.home.index', [
            'intro' => Pages::where('type', 'intro')->first(),
            'slider_1' => Pages::where('type', 'slider-1')->first(),
            'slider_2' => Pages::where('type', 'slider-2')->first(),
            'slider_3' => Pages::where('type', 'slider-3')->first(),
            'facilitiess' => Pages::where('category', 'facilities')->get(),
            'competencySkills' => Pages::where('category', 'competency-skill')->get(),
            'teachers' => Pages::where('category', 'teacher')->get(),
            'runningTexts' => Pages::where('category', 'running-text')->get(),
            'ppdb' => Pages::where('category', 'ppdb')->first(),
            'announcements' => $announcements,
            'all_announcements' => Announcement::where('status', 'active')->latest(),
            'articles' => Article::where('status', 'published')->latest()->get(),
            'all_events' => Events::latest()->get(),
            'galleries' => Galleries::latest()->take($this->loadGalleries)->get(),
            'events' => $events,
            'all_galleries' => Galleries::latest()->get(),
        ]);

    }
}
