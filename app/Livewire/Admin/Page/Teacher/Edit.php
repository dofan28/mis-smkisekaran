<?php

namespace App\Livewire\Admin\Page\Teacher;

use App\Models\Pages;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\Attributes\Title;
use Livewire\Attributes\Layout;
use Illuminate\Support\Facades\Storage;

#[Title('Edit Halaman Profil Guru | SMK ISLAM SEKARAN - Jalan Raya Sekaran, 01, Sekaran Lamongan')]
#[Layout('components.layouts.dashboard')]
class Edit extends Component
{
    use WithFileUploads;

    public Pages $pageTeacher;

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
            'title.required' => 'Judul halaman profil guru harus diisi',
            'title.string' => 'Format judul halaman profil guru tidak valid',
            'title.max' => 'Judul halaman profil guru tidak boleh lebih dari :max karakter',

            'content.required' => 'Konten halaman profil guru harus diisi',
            'content.string' => 'Format konten halaman profil guru tidak valid',

            'newImage.image' => 'File yang diunggah harus berupa gambar.',
            'newImage.mimes' => 'Gambar harus berformat jpg, jpeg, atau png.',
            'newImage.max' => 'Ukuran gambar tidak boleh lebih dari 2MB.',
        ];
    }

    public function mount(Pages $pageTeacher)
    {

        $this->pageTeacher = $pageTeacher;

        $this->fill(
            $pageTeacher->only('title', 'type', 'category', 'content', 'slug', 'content', 'image'),
        );
    }

    public function update()
    {
        $validatedData = $this->validate();

        $pageTeacher = $this->pageTeacher;

        if ($this->newImage) {
            if ($pageTeacher->image !== 'admin/img/page.png') {
                Storage::delete($pageTeacher->image);
            }
            $validatedData['image'] = $this->newImage->store(path: 'admin/img');
        } else if (!$this->newImage && $this->image) {
            $validatedData['image'] = $this->image;
        } else {
            $validatedData['image'] = 'admin/img/page.png';
        }

        $pageTeacher->update($validatedData);

        session()->flash('success', 'Halaman profil guru berhasil diubah.');
        $this->redirect('/admin/pages/teacher', navigate: true);
    }

    public function removeImage()
    {
        $this->reset('image');
        $this->reset('newImage');
    }

    public function render()
    {
        return view('livewire.admin.page.teacher.edit',[
            'header' => 'Edit Halaman Profil Guru'
        ]);
    }
}
