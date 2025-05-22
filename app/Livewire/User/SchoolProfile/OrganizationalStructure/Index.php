<?php

namespace App\Livewire\User\SchoolProfile\OrganizationalStructure;

use App\Models\Pages;
use Livewire\Component;
use Livewire\Attributes\Title;

#[Title('Struktur Organisasi | SMK ISLAM SEKARAN - Jalan Raya Sekaran, 01, Sekaran Lamongan')]
class Index extends Component
{
    public function render()
    {
        return view('livewire.user.school-profile.organizational-structure.index', [
            'organizationalstructure' => Pages::where('type', 'organizationalstructure')->first(),
            'competencySkills' => Pages::where('category', 'competency-skill')->get(),
            'teachers' => Pages::where('category', 'teacher')->get(),
            'facilitiess' => Pages::where('category', 'facilities')->get(),
        ]);
    }
}
