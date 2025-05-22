<?php

namespace App\Livewire\Admin\Page\RunningText;

use App\Models\Pages;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\Title;
use Livewire\Attributes\Layout;
use Illuminate\Support\Facades\Storage;

#[Title('Mengelola Halaman Teks Berjalan | SMK ISLAM SEKARAN - Jalan Raya Sekaran, 01, Sekaran Lamongan')]
#[Layout('components.layouts.dashboard')]
class Index extends Component
{
    use WithPagination;

    public $search = '';

    public function updatedSearch()
    {
        $this->resetPage();
    }

    public function delete(Pages $pageRunningText)
    {
        if ($pageRunningText->image !== 'admin/img/page.png') {
            Storage::delete($pageRunningText->image);
        }
        
        $pageRunningText->delete();

        session()->flash('success', 'Halaman teks berjalan berhasil dihapus.');
        $this->redirect('/admin/pages/runningText', navigate: true);
    }

    public function render()
    {
        $pageRunningTexts = Pages::where('category', 'running-text')
        ->search($this->search)
        ->paginate(5);

        return view('livewire.admin.page.running-text.index',[
            'header' => 'Mengelola Halaman Teks Berjalan',
            'pageRunningTexts' => $pageRunningTexts
        ]);
    }
}
