<?php

namespace App\Livewire\Admin\Page\Ppdb;

use App\Models\Pages;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\Attributes\Title;
use Livewire\Attributes\Layout;

#[Title('Buat Halaman PPDB | SMK ISLAM SEKARAN - Jalan Raya Sekaran, 01, Sekaran Lamongan')]
#[Layout('components.layouts.dashboard')]
class Create extends Component
{
    use WithFileUploads;

    public $title;
    public $category = 'ppdb';
    public $type = 'ppdb';
    public $content;
    public $image;

    public function rules()
    {
        return [
            'title' => ['required', 'string', 'max:50'],
            'category' => ['string', 'unique:pages,category'],
            'type' => ['required', 'unique:pages,type'],
            'content' => ['required'],
            'image' => ['nullable', 'image', 'mimes:jpg,jpeg,png', 'max:2048'],
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Judul halaman PPDB harus diisi',
            'title.string' => 'Format judul halaman PPDB tidak valid',
            'title.max' => 'Judul halaman PPDB tidak boleh lebih dari :max karakter',

            'category.string' => 'Format kategori halaman PPDB tidak valid',
            'category.unique' => 'Jenis halaman PPDB sudah ada',

            'type.required' => 'Jenis halaman PPDB harus diisi',
            'type.unique' => 'Jenis halaman PPDB sudah ada',

            'content.required' => 'Konten halaman PPDB harus diisi',
            'content.string' => 'Format konten halaman PPDB tidak valid',

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

        session()->flash('success', 'Halaman PPDB berhasil ditambahkan.');
        $this->redirect('/admin/pages/ppdb', navigate: true);
    }

    public function removeImage()
    {
        $this->reset('image');
    }

    public function render()
    {
        return view('livewire.admin.page.ppdb.create', [
             'header' => 'Buat Halaman PPDB'
        ]);
    }
}
