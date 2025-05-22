<?php

namespace App\Livewire\Admin\Page\SchoolProfile;

use App\Models\Pages;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\Attributes\Title;
use Livewire\Attributes\Layout;


#[Title('Buat Halaman Profil Sekolah | SMK ISLAM SEKARAN - Jalan Raya Sekaran, 01, Sekaran Lamongan')]
#[Layout('components.layouts.dashboard')]
class Create extends Component
{
    use WithFileUploads;

    public $title;
    public $category = 'school-profile';
    public $type;
    public $content;
    public $image;

    public function rules()
    {
        return [
            'title' => ['required', 'string', 'max:255'],
            'category' => ['string'],
            'type' => ['required', 'unique:pages,type'],
            'content' => ['required'],
            'image' => ['nullable', 'image', 'mimes:jpg,jpeg,png', 'max:2048'],
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Judul halaman profil sekolah harus diisi',
            'title.string' => 'Format judul halaman profil sekolah tidak valid',
            'title.max' => 'Judul halaman profil sekolah tidak boleh lebih dari :max karakter',

            'category.string' => 'Format kategori halaman profil sekolah tidak valid',

            'type.required' => 'Jenis halaman profil sekolah harus diisi',
            'type.unique' => 'Jenis halaman profil sekolah sudah ada',

            'content.required' => 'Konten halaman profil sekolah harus diisi',
            'content.string' => 'Format konten halaman profil sekolah tidak valid',

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

        session()->flash('success', 'Halaman profil sekolah berhasil ditambahkan.');
        $this->redirect('/admin/pages/schoolProfile', navigate: true);
    }

    public function removeImage()
    {
        $this->reset('image');
    }

    public function render()
    {
        return view('livewire.admin.page.school-profile.create', [
            'header' => 'Buat Halaman Profil Sekolah'
        ]);
    }
}
