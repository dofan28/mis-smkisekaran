<?php

namespace App\Livewire\Admin\Announcement;

use Livewire\Component;
use App\Models\Announcement;
use Livewire\WithPagination;
use Livewire\Attributes\Title;
use Livewire\Attributes\Layout;
use Illuminate\Support\Facades\Storage;

#[Title('Mengelola Pengumuman | SMK ISLAM SEKARAN - Jalan Raya Sekaran, 01, Sekaran Lamongan')]
#[Layout('components.layouts.dashboard')]
class Index extends Component
{
    use WithPagination;

    public $search = '';

    public function updatedSearch()
    {
        $this->resetPage(); 
    }

    public function delete(Announcement $announcement)
    {
        if ($announcement->image !== 'admin/img/announcement.png') {
            Storage::delete($announcement->image);
        }

        $announcement->delete();

        session()->flash('success', 'Pengumuman berhasil dihapus.');
        $this->redirect('/admin/announcements', navigate: true);
    }

    public function render()
    {
        $announcements = Announcement::search($this->search)->paginate(5);

        return view('livewire.admin.announcement.index', [
            'announcements' => $announcements,
            'header' => 'Mengelola Pengumuman'
        ]);
    }
}
