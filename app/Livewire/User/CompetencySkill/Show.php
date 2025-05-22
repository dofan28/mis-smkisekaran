<?php

namespace App\Livewire\User\CompetencySkill;

use App\Models\Pages;
use Livewire\Component;
use Livewire\Attributes\Title;

#[Title('Detail Kompetensi Keahlian | SMK ISLAM SEKARAN - Jalan Raya Sekaran, 01, Sekaran Lamongan')]
class Show extends Component
{
    public Pages $competencySkill;
    
    public function render()
    {
        return view('livewire.user.competency-skill.show',[
            'competencySkills' => Pages::where('category', 'competency-skill')->get(),
        ]);
    }
}
