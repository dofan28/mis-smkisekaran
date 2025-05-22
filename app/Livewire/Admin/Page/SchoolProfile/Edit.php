<?php

namespace App\Livewire\Admin\Page\SchoolProfile;

use App\Models\Pages;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\Attributes\Title;
use Illuminate\Validation\Rule;
use Livewire\Attributes\Layout;
use Illuminate\Support\Facades\Storage;

#[Title('Edit Halaman Profile Sekolah | SMK ISLAM SEKARAN - Jalan Raya Sekaran, 01, Sekaran Lamongan')]
#[Layout('components.layouts.dashboard')]
class Edit extends Component
{
    use WithFileUploads;

    public Pages $pageSchoolProfile;

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
            'type' => ['required', Rule::unique('pages', 'type')->ignore($this->pageSchoolProfile->id)],
            'content' => ['required', 'string'],
            'newImage' => ['nullable', 'image', 'mimes:jpg,jpeg,png', 'max:2048'],
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Judul halaman profil sekolah harus diisi',
            'title.string' => 'Format judul halaman profil sekolah tidak valid',
            'title.max' => 'Judul halaman profil sekolah tidak boleh lebih dari :max karakter',

            'type.required' => 'Jenis halaman profil sekolah harus diisi',
            'type.unique' => 'Jenis halaman profil sekolah sudah ada',

            'content.required' => 'Konten halaman profil sekolah harus diisi',
            'content.string' => 'Format konten halaman profil sekolah tidak valid',

            'newImage.image' => 'File yang diunggah harus berupa gambar.',
            'newImage.mimes' => 'Gambar harus berformat jpg, jpeg, atau png.',
            'newImage.max' => 'Ukuran gambar tidak boleh lebih dari 2MB.',
        ];
    }

    public function mount(Pages $pageSchoolProfile)
    {

        $this->pageSchoolProfile = $pageSchoolProfile;

        $this->fill(
            $pageSchoolProfile->only('title', 'type', 'category', 'content', 'slug', 'content', 'image'),
        );
    }

    public function update()
    {
        $validatedData = $this->validate();

        $pageSchoolProfile = $this->pageSchoolProfile;
        
        if ($this->newImage) {
            if($pageSchoolProfile->image !== 'admin/img/page.png'){
                Storage::delete($pageSchoolProfile->image);
            }            
            $validatedData['image'] = $this->newImage->store(path: 'admin/img');
        } else if (!$this->newImage && $this->image) {
            $validatedData['image'] = $this->image;
        } else {
            $validatedData['image'] = 'admin/img/page.png';
        }

        $pageSchoolProfile->update($validatedData);

        session()->flash('success', 'Halaman profil sekolah berhasil diubah.');
        $this->redirect('/admin/pages/schoolProfile', navigate: true);
    }

    public function removeImage()
    {
        $this->reset('image');
        $this->reset('newImage');
    }
    
    public function render()
    {
        return view('livewire.admin.page.school-profile.edit', [
            'header' => 'Edit Halaman Profil Sekolah'
        ]);
    }
}
