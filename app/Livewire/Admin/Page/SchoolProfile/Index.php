<?php

namespace App\Livewire\Admin\Page\SchoolProfile;

use App\Models\Pages;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\Title;
use Livewire\Attributes\Layout;
use Illuminate\Support\Facades\Storage;

#[Title('Mengelola Halaman Profile Sekolah | SMK ISLAM SEKARAN - Jalan Raya Sekaran, 01, Sekaran Lamongan')]
#[Layout('components.layouts.dashboard')]
class Index extends Component
{
    use WithPagination;

    public $search = '';

    public function updatedSearch()
    {
        $this->resetPage();
    }

    public function delete(Pages $pageSchoolProfile)
    {
        if ($pageSchoolProfile->image !== 'admin/img/page.png') {
            Storage::delete($pageSchoolProfile->image);
        }

        $pageSchoolProfile->delete();

        session()->flash('success', 'Halaman profil sekolah berhasil dihapus.');
        $this->redirect('/admin/pages/schoolProfile', navigate: true);
    }

    public function render()
    {
        $pageSchoolProfiles = Pages::where('category', 'school-profile')
            ->search($this->search)
            ->paginate(5);
        return view('livewire.admin.page.school-profile.index',[
            'pageSchoolProfiles' => $pageSchoolProfiles, 
            'header' => 'Mengelola Halaman Profil Sekolah'
        ]);
    }
}
