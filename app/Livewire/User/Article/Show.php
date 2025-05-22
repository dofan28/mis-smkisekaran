<?php

namespace App\Livewire\User\Article;

use App\Models\Article;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Detail Artikel | SMK ISLAM SEKARAN - Jalan Raya Sekaran, 01, Sekaran Lamongan')]
class Show extends Component
{
    public Article $article;
    public $loadArticles = 5;

    public function loadMoreArticles()
    {
        $this->loadArticles += 5;
    }

    public function render()
    {
        return view('livewire.user.article.show', [
            'articles' => Article::latest()->take($this->loadArticles)->get(),
            'all_articles' => Article::latest()->get(),
        ]);
    }
}
