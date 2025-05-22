<?php

namespace App\Livewire\Admin\Page\Facilities;

use App\Models\Pages;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\Attributes\Title;
use Livewire\Attributes\Layout;
use Illuminate\Support\Facades\Storage;

#[Title('Edit Halaman Sarana & Prasarana | SMK ISLAM SEKARAN - Jalan Raya Sekaran, 01, Sekaran Lamongan')]
#[Layout('components.layouts.dashboard')]
class Edit extends Component
{
    use WithFileUploads;

    public Pages $pageFacilities;

    public $title;
    public $slug;
    public $category;
    public $type;
    public $content;
    public $image;
    public $newImage;

    public function rules()
    {
        return [
            'title' => ['required', 'string', 'max:255'],
            'content' => ['required', 'string'],
            'newImage' => ['nullable', 'image', 'mimes:jpg,jpeg,png', 'max:2048'],
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Judul halaman sarana & prasarana harus diisi',
            'title.string' => 'Format judul halaman sarana & prasarana tidak valid',
            'title.max' => 'Judul halaman sarana & prasarana tidak boleh lebih dari :max karakter',

            'content.required' => 'Konten halaman sarana & prasarana harus diisi',
            'content.string' => 'Format konten halaman sarana & prasarana tidak valid',

            'newImage.image' => 'File yang diunggah harus berupa gambar.',
            'newImage.mimes' => 'Gambar harus berformat jpg, jpeg, atau png.',
            'newImage.max' => 'Ukuran gambar tidak boleh lebih dari 2MB.',
        ];
    }

    public function mount(Pages $pageFacilities)
    {

        $this->pageFacilities = $pageFacilities;

        $this->fill(
            $pageFacilities->only('title', 'type', 'category', 'content', 'slug', 'content', 'image'),
        );
    }

    public function update()
    {
        $validatedData = $this->validate();

        $pageFacilities = $this->pageFacilities;

        if ($this->newImage) {
            if ($pageFacilities->image !== 'admin/img/page.png') {
                Storage::delete($pageFacilities->image);
            }
            $validatedData['image'] = $this->newImage->store(path: 'admin/img');
        } else if (!$this->newImage && $this->image) {
            $validatedData['image'] = $this->image;
        } else {
            $validatedData['image'] = 'admin/img/page.png';
        }

        $pageFacilities->update($validatedData);

        session()->flash('success', 'Halaman sarana & prasarana berhasil diubah.');
        $this->redirect('/admin/pages/facilities', navigate: true);
    }

    public function removeImage()
    {
        $this->reset('image');
        $this->reset('newImage');
    }

    public function render()
    {
        return view('livewire.admin.page.facilities.edit', [
            'header' => 'Mengelola Halaman Sarana & Prasarana',
        ]);
    }
}
