<?php

namespace App\Livewire\Admin\Page\Teacher;

use App\Models\Pages;
use Livewire\Component;
use Livewire\Attributes\Title;
use Livewire\Attributes\Layout;

#[Title('Detail Halaman Profil Guru | SMK ISLAM SEKARAN - Jalan Raya Sekaran, 01, Sekaran Lamongan')]
#[Layout('components.layouts.dashboard')]
class Show extends Component
{
    public Pages $pageTeacher;

    public function render()
    {
        return view('livewire.admin.page.teacher.show',[
            'header' => 'Detail Halaman Profil Guru'
        ]);
    }
}
