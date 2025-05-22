<?php

namespace App\Livewire\Admin\Page;

use App\Models\Pages;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Detail Halaman | SMK ISLAM SEKARAN - Jalan Raya Sekaran, 01, Sekaran Lamongan')]
#[Layout('components.layouts.dashboard')]
class Show extends Component
{
    public Pages $page;
    public $url;
    public $category_name;

    public function mount()
    {
        if ($this->page->category === 'image-slider') {
            $this->category_name = 'Gambar Slider';
            $this->url = '/admin/pages/imageSlider';
        } else if ($this->page->category === 'school-profile') {
            $this->category_name = 'Profil Sekolah';
            $this->url = '/admin/pages/schoolProfile';
        } else if ($this->page->category === 'competency-skill') {
            $this->category_name = 'Kompetensi Keahlian';
            $this->url = '/admin/pages/competencySkill';
        }else if ($this->page->category === 'teacher') {
            $this->category_name = 'Profil Guru';
            $this->url = '/admin/pages/teacher';
        }else if ($this->page->category === 'running-text') {
            $this->category_name = 'Teks Berjalan';
            $this->url = '/admin/pages/runningText';
        }else if ($this->page->category === 'ppdb') {
            $this->category_name = 'PPDB';
            $this->url = '/admin/pages/ppdb';
        }else if ($this->page->category === 'facilities') {
            $this->category_name = 'Sarana & Prasaran';
            $this->url = '/admin/pages/facilities';
        }
        
    }

    public function render()
    {
        return view('livewire.admin.page.show', [
            'header' => 'Detail Halaman',
            'url' => $this->url,
            'category_name' => $this->category_name,
        ]);
    }
}
