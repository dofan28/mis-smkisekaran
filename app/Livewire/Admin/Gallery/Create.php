<?php

namespace App\Livewire\Admin\Gallery;

use App\Models\Galleries;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithFileUploads;

#[Title('Buat Galeri | SMK ISLAM SEKARAN - Jalan Raya Sekaran, 01, Sekaran Lamongan')]
#[Layout('components.layouts.dashboard')]
class Create extends Component
{
    use WithFileUploads;

    public $title;
    public $description;
    public $image;

    public function rules()
    {
        return [
            'title' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string'],
            'image' => ['nullable', 'image', 'mimes:jpg,jpeg,png', 'max:2048'],
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Judul galeri harus diisi',
            'title.string' => 'Format judul galeri tidak valid',
            'title.max' => 'Judul galeri tidak boleh lebih dari :max karakter',

            'description.required' => 'Konten galeri harus diisi',
            'description.string' => 'Format konten galeri tidak valid',

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
            $validatedData['image'] = 'admin/img/gallery.png';
        }

        Galleries::create($validatedData);

        session()->flash('success', 'Galeri berhasil ditambahkan.');
        $this->redirect('/admin/galleries', navigate: true);
    }

    public function removeImage()
    {
        $this->reset('image');
    }

    public function render()
    {
        return view('livewire.admin.gallery.create', [
            'header' => 'Buat Galeri',
        ]);
    }
}
