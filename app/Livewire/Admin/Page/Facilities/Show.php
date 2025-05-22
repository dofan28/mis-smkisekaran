<?php

namespace App\Livewire\Admin\Page\Facilities;

use App\Models\Pages;
use Livewire\Component;
use Livewire\Attributes\Title;
use Livewire\Attributes\Layout;

#[Title('Detail Sarana & Prasarana | SMK ISLAM SEKARAN - Jalan Raya Sekaran, 01, Sekaran Lamongan')]
#[Layout('components.layouts.dashboard')]
class Show extends Component
{
    public Pages $pageFacilities;

    public function render()
    {
        return view('livewire.admin.page.facilities.show',[
            'header' => 'Detail Sarana & Prasarana'
        ]);
    }
}
