<?php

namespace App\Livewire\Admin\Gallery;

use Livewire\Component;
use App\Models\Galleries;
use Livewire\WithFileUploads;
use Livewire\Attributes\Title;
use Livewire\Attributes\Layout;
use Illuminate\Support\Facades\Storage;

#[Title('Edit Galeri | SMK ISLAM SEKARAN - Jalan Raya Sekaran, 01, Sekaran Lamongan')]
#[Layout('components.layouts.dashboard')]
class Edit extends Component
{
    use WithFileUploads;

    public Galleries $gallery;

    public $title;
    public $slug;
    public $description;
    public $image;
    public $newImage;

    public function rules()
    {
        return [
            'title' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string'],
            'newImage' => ['nullable', 'image', 'mimes:jpg,jpeg,png', 'max:2048'],
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

            'newImage.image' => 'File yang diunggah harus berupa gambar.',
            'newImage.mimes' => 'Gambar harus berformat jpg, jpeg, atau png.',
            'newImage.max' => 'Ukuran gambar tidak boleh lebih dari 2MB.'];
    }

    public function mount(Galleries $gallery)
    {
        $this->gallery = $gallery;

        $this->fill(
            $gallery->only('title', 'slug', 'description', 'image'),
        );
    }

    public function update()
    {
        $validatedData = $this->validate();

        $gallery = $this->gallery;

        if ($this->newImage) {
            if($gallery->image !== 'admin/img/gallery.png'){
                Storage::delete($gallery->image);
            }
            $validatedData['image'] = $this->newImage->store(path: 'admin/img');
        } else if (!$this->newImage && $this->image) {
            $validatedData['image'] = $this->image;
        } else {
            $validatedData['image'] = 'admin/img/gallery.png';
        }

        $gallery->update($validatedData);

        session()->flash('success', 'Galeri berhasil diubah.');
        $this->redirect('/admin/galleries', navigate: true);
    }

    public function removeImage()
    {
        $this->reset('image');
        $this->reset('newImage');
    }

    public function render()
    {
        return view('livewire.admin.gallery.edit', [
            'header' => 'Edit Galeri'
        ]);
    }
}
