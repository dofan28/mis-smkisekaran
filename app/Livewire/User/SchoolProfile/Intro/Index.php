<?php

namespace App\Livewire\User\SchoolProfile\Intro;

use App\Models\Pages;
use Livewire\Component;
use Livewire\Attributes\Title;

#[Title('Sambutan Kepala Sekolah | SMK ISLAM SEKARAN - Jalan Raya Sekaran, 01, Sekaran Lamongan')]
class Index extends Component
{
    public function render()
    {
        return view('livewire.user.school-profile.intro.index', [
            'intro' => Pages::where('type', 'intro')->first(),
            'competencySkills' => Pages::where('category', 'competency-skill')->get(),
            'teachers' => Pages::where('category', 'teacher')->get(),
            'facilitiess' => Pages::where('category', 'facilities')->get(),
        ]);
    }
}
