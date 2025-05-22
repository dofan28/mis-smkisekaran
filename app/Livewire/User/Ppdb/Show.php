<?php

namespace App\Livewire\User\Ppdb;

use App\Models\Pages;
use Livewire\Component;
use Livewire\Attributes\Title;

#[Title('Detail PPDB | SMK ISLAM SEKARAN - Jalan Raya Sekaran, 01, Sekaran Lamongan')]
class Show extends Component
{
    public Pages $ppdb;

    public function render()
    {
        return view('livewire.user.ppdb.show',[
            'competencySkills' => Pages::where('category', 'competency-skill')->get(),
            'teachers' => Pages::where('category', 'teacher')->get(),
        ]);
    }
}
