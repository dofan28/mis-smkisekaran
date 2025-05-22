<?php

namespace App\Livewire\User\Teacher;

use App\Models\Pages;
use Livewire\Component;

class Show extends Component
{
    public Pages $teacher;
    public $loadTeachers = 5;

    public function loadMoreTeachers()
    {
        $this->loadTeachers += 5;
    }

    public function render()
    {
        return view('livewire.user.teacher.show',[
            'teachers' => Pages::where('category', 'teacher')->take($this->loadTeachers)->get(),
            'all_teachers' => Pages::where('category', 'teacher')->get()
        ]);
    }
}
