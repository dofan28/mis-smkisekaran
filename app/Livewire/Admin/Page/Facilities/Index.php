<?php

namespace App\Livewire\Admin\Page\Facilities;

use App\Models\Pages;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\Title;
use Livewire\Attributes\Layout;
use Illuminate\Support\Facades\Storage;

#[Title('Mengelola Halaman Sarana & Prasarana | SMK ISLAM SEKARAN - Jalan Raya Sekaran, 01, Sekaran Lamongan')]
#[Layout('components.layouts.dashboard')]
class Index extends Component
{
    use WithPagination;

    public $search = '';

    public function updatedSearch()
    {
        $this->resetPage();
    }

    public function delete(Pages $pageFacilities)
    {
        if ($pageFacilities->image !== 'admin/img/page.png') {
            Storage::delete($pageFacilities->image);
        }

        $pageFacilities->delete();

        session()->flash('success', 'Halaman sarana & prasarana berhasil dihapus.');
        $this->redirect('/admin/pages/facilities', navigate: true);
    }


    public function render()
    {
        $pageFacilitiess = Pages::where('category', 'facilities')
            ->search($this->search)
            ->paginate(5);

        return view('livewire.admin.page.facilities.index', [
            'header' => 'Mengelola Halaman Sarana & Prasarana',
            'pageFacilitiess' => $pageFacilitiess
        ]);
    }
}
