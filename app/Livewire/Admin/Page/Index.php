<?php

namespace App\Livewire\Admin\Page;

use App\Models\Pages;
use Illuminate\Support\Facades\Storage;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithPagination;

#[Title('Mengelola Halaman | SMK ISLAM SEKARAN - Jalan Raya Sekaran, 01, Sekaran Lamongan')]
#[Layout('components.layouts.dashboard')]
class Index extends Component
{
    use WithPagination;

    public $search = '';

    public function updatedSearch()
    {
        $this->resetPage();
    }

    public function delete(Pages $page)
    {
        if ($page->image !== 'admin/img/page.png') {
            Storage::delete($page->image);
        }

        $page->delete();

        session()->flash('success', 'Halaman berhasil dihapus.');
        $this->redirect('/admin/pages', navigate: true);
    }

    public function render()
    {
        $pages = Pages::search($this->search)->paginate(5);

        return view('livewire.admin.page.index',
            [
                'header' => 'Mengelola Halaman',
                'pages' => $pages,
            ]
        );
    }
}
