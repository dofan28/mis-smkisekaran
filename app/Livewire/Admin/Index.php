<?php

namespace App\Livewire\Admin;

use App\Models\Announcement;
use App\Models\Article;
use App\Models\Category;
use App\Models\Events;
use App\Models\Galleries;
use App\Models\Pages;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Dashboard | SMK ISLAM SEKARAN - Jalan Raya Sekaran, 01, Sekaran Lamongan')]
#[Layout('components.layouts.dashboard')]
class Index extends Component
{

    public function render()
    {
        return view('livewire.admin.index', [
            'header' => 'Dashboard',
            'pages' => Pages::all(),
            'latestPage' => Pages::latest('updated_at')->first(),
            'announcements' => Announcement::all(),
            'latestAnnouncement' => Announcement::latest('updated_at')->first(),
            'categories' => Category::all(),
            'latestCategory' => Category::latest('updated_at')->first(),
            'articles' => Article::all(),
            'latestArticle' => Article::latest('updated_at')->first(),
            'galleries' => Galleries::all(),
            'latestGallery' => Galleries::latest('updated_at')->first(),
            'events' => Events::all(),
            'latestEvent' => Events::latest('updated_at')->first(),
        ]);
    }
}
