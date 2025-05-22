<?php

namespace App\Livewire\Admin\Article;

use App\Models\Article;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\Title;
use Livewire\Attributes\Layout;
use Illuminate\Support\Facades\Storage;

#[Title('Mengelola Artikel | SMK ISLAM SEKARAN - Jalan Raya Sekaran, 01, Sekaran Lamongan')]
#[Layout('components.layouts.dashboard')]
class Index extends Component
{
    use WithPagination;

    public $search = '';

    public function updatedSearch()
    {
        $this->resetPage();
    }

    public function delete(Article $article)
    {
        if ($article->image  !== 'admin/img/article.png') {
            Storage::delete($article->image);
        }

        $article->delete();

        session()->flash('success', 'Artikel berhasil dihapus.');
        $this->redirect('/admin/articles', navigate: true);
    }

    public function render()
    {
        $articles = Article::search($this->search)->paginate(5);

        return view('livewire.admin.article.index', [
            'articles' => $articles,
            'header' => 'Mengelola Artikel'
        ]);
    }
}
