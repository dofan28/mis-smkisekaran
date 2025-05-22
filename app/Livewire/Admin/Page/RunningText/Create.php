<?php

namespace App\Livewire\Admin\Page\RunningText;

use App\Models\Pages;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\Attributes\Title;
use Livewire\Attributes\Layout;

#[Title('Buat Halaman Teks Berjalan | SMK ISLAM SEKARAN - Jalan Raya Sekaran, 01, Sekaran Lamongan')]
#[Layout('components.layouts.dashboard')]
class Create extends Component
{
    use WithFileUploads;

    public $title;
    public $category = 'running-text';
    public $type = 'running-text';
    public $content;
    public $image;

    public function rules()
    {
        return [
            'title' => ['required', 'string', 'max:50'],
            'category' => ['string'],
            'type' => ['required'],
            'content' => ['required', 'max:300'],
            'image' => ['nullable', 'image', 'mimes:jpg,jpeg,png', 'max:2048'],
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Judul halaman teks berjalan harus diisi',
            'title.string' => 'Format judul halaman teks berjalan tidak valid',
            'title.max' => 'Judul halaman teks berjalan tidak boleh lebih dari :max karakter',

            'category.string' => 'Format kategori halaman teks berjalan tidak valid',

            'type.required' => 'Jenis halaman teks berjalan harus diisi',

            'content.required' => 'Konten halaman teks berjalan harus diisi',
            'content.string' => 'Format konten halaman teks berjalan tidak valid',
            'content.max' => 'Konten halaman teks berjalan tidak boleh lebih dari :max karakter',

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

        session()->flash('success', 'Halaman teks berjalan berhasil ditambahkan.');
        $this->redirect('/admin/pages/runningText', navigate: true);
    }

    public function removeImage()
    {
        $this->reset('image');
    }

    public function render()
    {
        return view('livewire.admin.page.running-text.create', [
            'header' => 'Buat Halaman Teks Berjalan'
        ]);
    }
}
