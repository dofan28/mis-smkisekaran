<?php

namespace App\Livewire\Admin\Page\CompetencySkill;

use App\Models\Pages;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\Title;
use Livewire\Attributes\Layout;
use Illuminate\Support\Facades\Storage;

#[Title('Mengelola Halaman Kompetensi Keahlian | SMK ISLAM SEKARAN - Jalan Raya Sekaran, 01, Sekaran Lamongan')]
#[Layout('components.layouts.dashboard')]
class Index extends Component
{
    use WithPagination;

    public $search = '';

    public function updatedSearch()
    {
        $this->resetPage();
    }

    public function delete(Pages $pageCompetencySkill)
    {
        if ($pageCompetencySkill->image !== 'admin/img/page.png') {
            Storage::delete($pageCompetencySkill->image);
        }

        $pageCompetencySkill->delete();

        session()->flash('success', 'Halaman kompetensi keahlian berhasil dihapus.');
        $this->redirect('/admin/pages/competencySkill', navigate: true);
    }

    public function render()
    {
        $pageCompetencySkills = Pages::where('category', 'competency-skill')
            ->search($this->search)
            ->paginate(5);

        return view('livewire.admin.page.competency-skill.index', [
            'header' => 'Mengelola Halaman Kompetensi Keahlian',
            'pageCompetencySkills' => $pageCompetencySkills
        ]);
    }
}
