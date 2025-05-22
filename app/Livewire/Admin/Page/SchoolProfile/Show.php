<?php

namespace App\Livewire\Admin\Page\SchoolProfile;

use App\Models\Pages;
use Livewire\Component;
use Livewire\Attributes\Title;
use Livewire\Attributes\Layout;

#[Title('Detail Halaman Profil Sekolah | SMK ISLAM SEKARAN - Jalan Raya Sekaran, 01, Sekaran Lamongan')]
#[Layout('components.layouts.dashboard')]
class Show extends Component
{
    public Pages $pageSchoolProfile;

    public function render()
    {
        return view('livewire.admin.page.school-profile.show',[
            'header' => 'Detail Halaman Profil Sekolah'
        ]);
    }
}
