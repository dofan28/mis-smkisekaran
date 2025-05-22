<?php

namespace App\Livewire\Admin\Gallery;

use Livewire\Component;
use App\Models\Galleries;
use Livewire\WithPagination;
use Livewire\Attributes\Title;
use Livewire\Attributes\Layout;
use Illuminate\Support\Facades\Storage;

#[Title('Mengelola Galeri | SMK ISLAM SEKARAN - Jalan Raya Sekaran, 01, Sekaran Lamongan')]
#[Layout('components.layouts.dashboard')]
class Index extends Component
{
    use WithPagination;

    public $search = '';

    public function updatedSearch()
    {
        $this->resetPage();
    }

    public function delete(Galleries $gallery)
    {
        if ($gallery->image !== 'admin/img/gallery.png') {
            Storage::delete($gallery->image);
        }

        $gallery->delete();

        session()->flash('success', 'Galeri berhasil dihapus.');
        $this->redirect('/admin/galleries', navigate: true);
    }

    public function render()
    {
        $galleries = Galleries::search($this->search)->paginate(5);

        return view('livewire.admin.gallery.index', [
            'galleries' => $galleries,
            'header' => 'Mengelola Galeri'
        ]);
    }
}
