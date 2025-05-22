<?php

namespace App\Livewire\User\Facilities;

use App\Models\Pages;
use Livewire\Component;

class Show extends Component
{
    public Pages $facilities;
    public function render()
    {
        return view('livewire.user.facilities.show',[
            'competencySkills' => Pages::where('category', 'competency-skill')->get(),
            'teachers' => Pages::where('category', 'teacher')->get(),
            'facilitiess' => Pages::where('category', 'facilities')->get(),
        ]);
    }
}
