<?php

namespace App\Livewire\Admin\Article;

use App\Models\Article;
use Livewire\Component;
use Livewire\Attributes\Title;
use Livewire\Attributes\Layout;

#[Title('Detail Artikel | SMK ISLAM SEKARAN - Jalan Raya Sekaran, 01, Sekaran Lamongan')]
#[Layout('components.layouts.dashboard')]
class Show extends Component
{
    public Article $article;

    public function render()
    {
        return view('livewire.admin.article.show', [
            'header' => 'Detail Artikel'
        ]);
    }
}
