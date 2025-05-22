<?php

namespace App\Livewire\Admin\Page\ImageSlider;

use App\Models\Pages;
use Illuminate\Support\Facades\Storage;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithPagination;

#[Title('Mengelola Halaman Gambar Slider | SMK ISLAM SEKARAN - Jalan Raya Sekaran, 01, Sekaran Lamongan')]
#[Layout('components.layouts.dashboard')]
class Index extends Component
{
    use WithPagination;

    public $search = '';

    public function updatedSearch()
    {
        $this->resetPage();
    }

    public function delete(Pages $pageImageSlider)
    {
        if ($pageImageSlider->image !== 'admin/img/page.png') {
            Storage::delete($pageImageSlider->image);
        }

        $pageImageSlider->delete();

        session()->flash('success', 'Halaman gambar slider berhasil dihapus.');
        $this->redirect('/admin/pages/imageSlider', navigate: true);
    }

    public function render()
    {
        $pageImageSliders = Pages::where('category', 'image-slider')
            ->search($this->search)
            ->paginate(5);

        return view('livewire.admin.page.image-slider.index' , [
            'header' => 'Mengelola Halaman Gambar Slider',
            'pageImageSliders' => $pageImageSliders,
        ]);
    }
}
