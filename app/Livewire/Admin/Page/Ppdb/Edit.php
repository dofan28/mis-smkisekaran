<?php

namespace App\Livewire\Admin\Page\Ppdb;

use App\Models\Pages;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\Attributes\Title;
use Illuminate\Validation\Rule;
use Livewire\Attributes\Layout;
use Illuminate\Support\Facades\Storage;

#[Title('Edit Halaman PPDB | SMK ISLAM SEKARAN - Jalan Raya Sekaran, 01, Sekaran Lamongan')]
#[Layout('components.layouts.dashboard')]
class Edit extends Component
{
    use WithFileUploads;

    public Pages $pagePPDB;

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
            'title' => ['required', 'string', 'max:50'],
            'type' => ['required', Rule::unique('pages', 'type')->ignore($this->pagePPDB->id)],
            'category' => ['required', Rule::unique('pages', 'category')->ignore($this->pagePPDB->id)],
            'content' => ['required'],
            'newImage' => ['nullable', 'image', 'mimes:jpg,jpeg,png', 'max:2048'],
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Judul halaman PPDB harus diisi',
            'title.string' => 'Format judul halaman PPDB tidak valid',
            'title.max' => 'Judul halaman PPDB tidak boleh lebih dari :max karakter',
            
            'category.required' => 'Kategori halaman PPDB harus diisi',
            'category.unique' => 'Kategori halaman PPDB sudah ada',

            'type.required' => 'Jenis halaman PPDB harus diisi',
            'type.unique' => 'Jenis halaman PPDB sudah ada',

            'content.required' => 'Konten halaman PPDB harus diisi',
            'content.string' => 'Format konten halaman PPDB tidak valid',

            'newImage.image' => 'File yang diunggah harus berupa gambar.',
            'newImage.mimes' => 'Gambar harus berformat jpg, jpeg, atau png.',
            'newImage.max' => 'Ukuran gambar tidak boleh lebih dari 2MB.',
        ];
    }

    public function mount(Pages $pagePPDB)
    {

        $this->pagePPDB = $pagePPDB;

        $this->fill(
            $pagePPDB->only('title', 'type', 'category', 'content', 'slug', 'content', 'image'),
        );
    }

    public function update()
    {
        $validatedData = $this->validate();

        $pagePPDB = $this->pagePPDB;

        if ($this->newImage) {
            if ($pagePPDB->image !== 'admin/img/page.png') {
                Storage::delete($pagePPDB->image);
            }
            $validatedData['image'] = $this->newImage->store(path: 'admin/img');
        } else if (!$this->newImage && $this->image) {
            $validatedData['image'] = $this->image;
        } else {
            $validatedData['image'] = 'admin/img/page.png';
        }

        $pagePPDB->update($validatedData);

        session()->flash('success', 'Halaman PPDB berhasil diubah.');
        $this->redirect('/admin/pages/ppdb', navigate: true);
    }

    public function removeImage()
    {
        $this->reset('image');
        $this->reset('newImage');
    }

    public function render()
    {
        return view('livewire.admin.page.ppdb.edit',[
              'header' => 'Edit Halaman PPDB'
        ]);
    }
}
