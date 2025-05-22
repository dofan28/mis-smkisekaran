<?php

namespace App\Livewire\Admin\Page\Ppdb;

use App\Models\Pages;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\Title;
use Livewire\Attributes\Layout;
use Illuminate\Support\Facades\Storage;

#[Title('Mengelola Halaman PPDB | SMK ISLAM SEKARAN - Jalan Raya Sekaran, 01, Sekaran Lamongan')]
#[Layout('components.layouts.dashboard')]
class Index extends Component
{
    use WithPagination;

    public $search = '';

    public function updatedSearch()
    {
        $this->resetPage();
    }

    public function delete(Pages $pagePPDB)
    {
        if ($pagePPDB->image !== 'admin/img/page.png') {
            Storage::delete($pagePPDB->image);
        }
        
        $pagePPDB->delete();

        session()->flash('success', 'Halaman PPDB berhasil dihapus.');
        $this->redirect('/admin/pages/ppdb', navigate: true);
    }
    public function render()
    {
        $pagePPDBs = Pages::where('category', 'ppdb')
        ->search($this->search)
        ->paginate(5);

        return view('livewire.admin.page.ppdb.index',[
            'header' => 'Mengelola Halaman PPDB',
            'pagePPDBs' => $pagePPDBs
        ]);
    }
}
