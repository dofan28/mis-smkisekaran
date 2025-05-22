<?php

namespace App\Livewire\Admin\Page\Ppdb;

use App\Models\Pages;
use Livewire\Component;
use Livewire\Attributes\Title;
use Livewire\Attributes\Layout;

#[Title('Detail Halaman PPDB | SMK ISLAM SEKARAN - Jalan Raya Sekaran, 01, Sekaran Lamongan')]
#[Layout('components.layouts.dashboard')]
class Show extends Component
{
    public Pages $pagePPDB;

    public function render()
    {
        return view('livewire.admin.page.ppdb.show', [
            'header' => 'Detail Halaman PPDB'
        ]);
    }
}
