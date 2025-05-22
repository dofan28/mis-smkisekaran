<?php

namespace App\Livewire\Admin\Page\Teacher;

use App\Models\Pages;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\Title;
use Livewire\Attributes\Layout;
use Illuminate\Support\Facades\Storage;

#[Title('Mengelola Halaman Profil Guru | SMK ISLAM SEKARAN - Jalan Raya Sekaran, 01, Sekaran Lamongan')]
#[Layout('components.layouts.dashboard')]
class Index extends Component
{
    use WithPagination;

    public $search = '';

    public function updatedSearch()
    {
        $this->resetPage();
    }

    public function delete(Pages $pageTeacher)
    {
        if ($pageTeacher->image !== 'admin/img/page.png') {
            Storage::delete($pageTeacher->image);
        }
        
        $pageTeacher->delete();

        session()->flash('success', 'Halaman profil guru berhasil dihapus.');
        $this->redirect('/admin/pages/teacher', navigate: true);
    }

    public function render()
    {
        $pageTeachers = Pages::where('category', 'teacher')
        ->search($this->search)
        ->paginate(5);

        return view('livewire.admin.page.teacher.index',[
            'header' => 'Mengelola Halaman Profil Guru',
            'pageTeachers' => $pageTeachers
        ]);
    }
}
