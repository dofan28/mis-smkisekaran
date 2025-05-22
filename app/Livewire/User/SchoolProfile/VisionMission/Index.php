<?php

namespace App\Livewire\User\SchoolProfile\VisionMission;

use App\Models\Pages;
use Livewire\Component;
use Livewire\Attributes\Title;

#[Title('Visi dan Misi | SMK ISLAM SEKARAN - Jalan Raya Sekaran, 01, Sekaran Lamongan')]
class Index extends Component
{
    public function render()
    {
        return view('livewire.user.school-profile.vision-mission.index',[
            'visionmission' => Pages::where('type', 'visionmission')->first(),
            'competencySkills' => Pages::where('category', 'competency-skill')->get(),
            'teachers' => Pages::where('category', 'teacher')->get(),
            'facilitiess' => Pages::where('category', 'facilities')->get(),
        ]);
    }
}
