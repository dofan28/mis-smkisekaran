<?php

namespace App\Livewire\User\Article;

use App\Models\Announcement;
use App\Models\Article;
use App\Models\Category;
use App\Models\Events;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Artikel | SMK ISLAM SEKARAN - Jalan Raya Sekaran, 01, Sekaran Lamongan')]
class Index extends Component
{
    public $search = '';
    public $category = '';
    public $loadArticles = 6;
    public $loadAnnouncements = 3;
    public $loadEvents = 3;

    public function updatedSearch()
    {
        $this->loadArticles = 6;
    }

    public function updatedCategory()
    {
        $this->loadArticles = 6;
    }


    public function loadMoreArticles()
    {
        $this->loadArticles += 6;
    }

    public function loadMoreAnnouncements()
    {
        $this->loadAnnouncements += 3;
    }

    public function loadMoreEvents()
    {
        $this->loadEvents += 3;
    }

    public function render()
    {
        $articlesQuery = Article::where('status', 'published')
        ->where(function ($query) {
            $query->where('title', 'like', '%'.$this->search.'%')
                  ->orWhere('content', 'like', '%'.$this->search.'%');
        });

        if (!empty($this->category)) {
            $articlesQuery->where('category_id', $this->category);
        }
        return view('livewire.user.article.index', [
            'articles' => $articlesQuery->latest()->take($this->loadArticles)->get(),
            'all_articles' => Article::latest()->get(),
            'categories' => Category::latest()->get(),
            'events' => Events::latest()->take($this->loadEvents)->get(),
            'all_events' => Events::latest()->get(),
            'announcements' => Announcement::latest()->take($this->loadAnnouncements)->get(),
            'all_announcements' => Announcement::latest()->get(),
        ]);
    }
}
