<?php

namespace App\Livewire\Admin\Page\Teacher;

use App\Models\Pages;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\Attributes\Title;
use Livewire\Attributes\Layout;

#[Title('Buat Halaman Profil Guru | SMK ISLAM SEKARAN - Jalan Raya Sekaran, 01, Sekaran Lamongan')]
#[Layout('components.layouts.dashboard')]
class Create extends Component
{
    use WithFileUploads;

    public $title;
    public $category = 'teacher';
    public $type = 'teacher';
    public $content;
    public $image;

    public function rules()
    {
        return [
            'title' => ['required', 'string', 'max:255'],
            'category' => ['string'],
            'type' => ['required'],
            'content' => ['required'],
            'image' => ['nullable', 'image', 'mimes:jpg,jpeg,png', 'max:2048'],
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Judul halaman profil guru harus diisi',
            'title.string' => 'Format judul halaman profil guru tidak valid',
            'title.max' => 'Judul halaman profil guru tidak boleh lebih dari :max karakter',

            'category.string' => 'Format kategori halaman profil guru tidak valid',

            'type.required' => 'Jenis halaman profil guru harus diisi',

            'content.required' => 'Konten halaman profil guru harus diisi',
            'content.string' => 'Format konten halaman profil guru tidak valid',

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

        session()->flash('success', 'Halaman profil guru berhasil ditambahkan.');
        $this->redirect('/admin/pages/teacher', navigate: true);
    }

    public function removeImage()
    {
        $this->reset('image');
    }
    public function render()
    {
        return view('livewire.admin.page.teacher.create',[
             'header' => 'Buat Halaman Profil Guru'
        ]);
    }
}
