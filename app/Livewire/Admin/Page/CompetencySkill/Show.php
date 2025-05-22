<?php

namespace App\Livewire\Admin\Page\CompetencySkill;

use App\Models\Pages;
use Livewire\Component;
use Livewire\Attributes\Title;
use Livewire\Attributes\Layout;

#[Title('Detail Kompetensi Keahlian | SMK ISLAM SEKARAN - Jalan Raya Sekaran, 01, Sekaran Lamongan')]
#[Layout('components.layouts.dashboard')]
class Show extends Component
{
    public Pages $pageCompetencySkill;

    public function render()
    {
        return view('livewire.admin.page.competency-skill.show',[
            'header' => 'Detail Kompetensi Keahlian'
        ]);
    }
}
