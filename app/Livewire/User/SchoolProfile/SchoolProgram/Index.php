<?php

namespace App\Livewire\User\SchoolProfile\SchoolProgram;

use App\Models\Pages;
use Livewire\Component;
use Livewire\Attributes\Title;

#[Title('Program Sekolah | SMK ISLAM SEKARAN - Jalan Raya Sekaran, 01, Sekaran Lamongan')]
class Index extends Component
{
    public function render()
    {
        return view('livewire.user.school-profile.school-program.index',[
            'schoolprogram' => Pages::where('type', 'schoolprogram')->first(),
            'competencySkills' => Pages::where('category', 'competency-skill')->get(),
            'teachers' => Pages::where('category', 'teacher')->get(),
            'facilitiess' => Pages::where('category', 'facilities')->get(),
        ]);
    }
}
