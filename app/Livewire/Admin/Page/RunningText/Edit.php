<?php

namespace App\Livewire\Admin\Page\RunningText;

use App\Models\Pages;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\Attributes\Title;
use Livewire\Attributes\Layout;
use Illuminate\Support\Facades\Storage;

#[Title('Edit Halaman Teks Berjalan | SMK ISLAM SEKARAN - Jalan Raya Sekaran, 01, Sekaran Lamongan')]
#[Layout('components.layouts.dashboard')]
class Edit extends Component
{
    use WithFileUploads;

    public Pages $pageRunningText;

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
            'content' => ['required', 'max:300'],
            'newImage' => ['nullable', 'image', 'mimes:jpg,jpeg,png', 'max:2048'],
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Judul halaman teks berjalan harus diisi',
            'title.string' => 'Format judul halaman teks berjalan tidak valid',
            'title.max' => 'Judul halaman teks berjalan tidak boleh lebih dari :max karakter',

            'content.required' => 'Konten halaman teks berjalan harus diisi',
            'content.string' => 'Format konten halaman teks berjalan tidak valid',
            'content.max' => 'Konten halaman teks berjalan tidak boleh lebih dari :max karakter',

            'newImage.image' => 'File yang diunggah harus berupa gambar.',
            'newImage.mimes' => 'Gambar harus berformat jpg, jpeg, atau png.',
            'newImage.max' => 'Ukuran gambar tidak boleh lebih dari 2MB.',
        ];
    }

    public function mount(Pages $pageRunningText)
    {

        $this->pageRunningText = $pageRunningText;

        $this->fill(
            $pageRunningText->only('title', 'type', 'category', 'content', 'slug', 'content', 'image'),
        );
    }

    public function update()
    {
        $validatedData = $this->validate();

        $pageRunningText = $this->pageRunningText;

        if ($this->newImage) {
            if ($pageRunningText->image !== 'admin/img/page.png') {
                Storage::delete($pageRunningText->image);
            }
            $validatedData['image'] = $this->newImage->store(path: 'admin/img');
        } else if (!$this->newImage && $this->image) {
            $validatedData['image'] = $this->image;
        } else {
            $validatedData['image'] = 'admin/img/page.png';
        }

        $pageRunningText->update($validatedData);

        session()->flash('success', 'Halaman teks berjalan berhasil diubah.');
        $this->redirect('/admin/pages/runningText', navigate: true);
    }

    public function removeImage()
    {
        $this->reset('image');
        $this->reset('newImage');
    }

    public function render()
    {
        return view('livewire.admin.page.running-text.edit', [
            'header' => 'Edit Halaman Teks Berjalan'
        ]);
    }
}
