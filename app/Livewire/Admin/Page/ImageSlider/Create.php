<?php

namespace App\Livewire\Admin\Page\ImageSlider;

use App\Models\Pages;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithFileUploads;

#[Title('Buat Halaman Gambar Slider | SMK ISLAM SEKARAN - Jalan Raya Sekaran, 01, Sekaran Lamongan')]
#[Layout('components.layouts.dashboard')]
class Create extends Component
{
    use WithFileUploads;

    public $title;
    public $category = 'image-slider';
    public $type;
    public $content;
    public $image;

    public function rules()
    {
        return [
            'title' => ['required', 'string', 'max:55'],
            'category' => ['string'],
            'type' => ['required', 'unique:pages,type'],
            'content' => ['required'],
            'image' => ['nullable', 'image', 'mimes:jpg,jpeg,png', 'max:2048'],
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Judul halaman gambar slider harus diisi',
            'title.string' => 'Format judul halaman gambar slider tidak valid',
            'title.max' => 'Judul halaman gambar slider tidak boleh lebih dari :max karakter',

            'category.string' => 'Format kategori halaman gambar slider tidak valid',

            'type.required' => 'Jenis halaman gambar slider harus diisi',
            'type.unique' => 'Jenis halaman gambar slider sudah ada',

            'content.required' => 'Konten halaman gambar slider harus diisi',
            'content.string' => 'Format konten halaman gambar slider tidak valid',

            'image.image' => 'File yang diunggah harus berupa gambar.',
            'image.mimes' => 'Gambar harus berformat jpg, jpeg, atau png.',
            'image.max' => 'Ukuran gambar tidak boleh lebih dari 2MB.',
        ];
    }

    public function save()
    {
        $validatedData = $this->validate();

        if ($this->image) {
            $validatedData['image'] = $this->image->store(path: 'admin/img');
        } else {
            $validatedData['image'] = 'admin/img/page.png';
        }

        Pages::create($validatedData);

        session()->flash('success', 'Halaman gambar slider berhasil ditambahkan.');
        $this->redirect('/admin/pages/imageSlider', navigate: true);
    }

    public function removeImage()
    {
        $this->reset('image');
    }

    public function render()
    {
        return view('livewire.admin.page.image-slider.create', [
            'header' => 'Buat Halaman Gambar Slider',
        ]);
    }
}
