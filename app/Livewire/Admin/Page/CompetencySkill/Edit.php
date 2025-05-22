<?php

namespace App\Livewire\Admin\Page\CompetencySkill;

use App\Models\Pages;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithFileUploads;

#[Title('Edit Halaman Kompetensi Keahlian | SMK ISLAM SEKARAN - Jalan Raya Sekaran, 01, Sekaran Lamongan')]
#[Layout('components.layouts.dashboard')]
class Edit extends Component
{
    use WithFileUploads;

    public Pages $pageCompetencySkill;

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
            'title.required' => 'Judul halaman kompetensi keahlian harus diisi',
            'title.string' => 'Format judul halaman kompetensi keahlian tidak valid',
            'title.max' => 'Judul halaman kompetensi keahlian tidak boleh lebih dari :max karakter',

            'content.required' => 'Konten halaman kompetensi keahlian harus diisi',
            'content.string' => 'Format konten halaman kompetensi keahlian tidak valid',

            'newImage.image' => 'File yang diunggah harus berupa gambar.',
            'newImage.mimes' => 'Gambar harus berformat jpg, jpeg, atau png.',
            'newImage.max' => 'Ukuran gambar tidak boleh lebih dari 2MB.',
        ];
    }

    public function mount(Pages $pageCompetencySkill)
    {

        $this->pageCompetencySkill = $pageCompetencySkill;

        $this->fill(
            $pageCompetencySkill->only('title', 'type', 'category', 'content', 'slug', 'content', 'image'),
        );
    }

    public function update()
    {
        $validatedData = $this->validate();

        $pageCompetencySkill = $this->pageCompetencySkill;

        if ($this->newImage) {
            if ($pageCompetencySkill->image !== 'admin/img/page.png') {
                Storage::delete($pageCompetencySkill->image);
            }
            $validatedData['image'] = $this->newImage->store(path: 'admin/img');
        } else if (!$this->newImage && $this->image) {
            $validatedData['image'] = $this->image;
        } else {
            $validatedData['image'] = 'admin/img/page.png';
        }

        $pageCompetencySkill->update($validatedData);

        session()->flash('success', 'Halaman kompetensi keahlian berhasil diubah.');
        $this->redirect('/admin/pages/competencySkill', navigate: true);
    }

    public function removeImage()
    {
        $this->reset('image');
        $this->reset('newImage');
    }

    public function render()
    {
        return view('livewire.admin.page.competency-skill.edit', [
            'header' => 'Mengelola Halaman Kompetensi Keahlian',
        ]);
    }
}
