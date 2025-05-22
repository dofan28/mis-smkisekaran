<?php

namespace App\Livewire\Admin\Announcement;

use Livewire\Component;
use App\Models\Announcement;
use Livewire\WithFileUploads;
use Livewire\Attributes\Title;
use Livewire\Attributes\Layout;
use Illuminate\Support\Facades\Storage;

#[Title('Edit Pengumuman | SMK ISLAM SEKARAN - Jalan Raya Sekaran, 01, Sekaran Lamongan')]
#[Layout('components.layouts.dashboard')]
class Edit extends Component
{
    use WithFileUploads;

    public Announcement $announcement;

    public $title;
    public $slug;
    public $content;
    public $image;
    public $status;
    public $newImage;

    public function rules()
    {
        return [
            'title' => ['required', 'string', 'max:255'],
            'content' => ['required', 'string'],
            'newImage' => ['nullable', 'image', 'mimes:jpg,jpeg,png', 'max:2048'],
            'status' => ['required', 'in:active,inactive'],
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Judul pengumuman harus diisi',
            'title.string' => 'Format judul pengumuman tidak valid',
            'title.max' => 'Judul pengumuman tidak boleh lebih dari :max karakter',

            'content.required' => 'Konten pengumuman harus diisi',
            'content.string' => 'Format konten pengumuman tidak valid',

            'newImage.image' => 'File yang diunggah harus berupa gambar.',
            'newImage.mimes' => 'Gambar harus berformat jpg, jpeg, atau png.',
            'newImage.max' => 'Ukuran gambar tidak boleh lebih dari 2MB.',

            'status.required' => 'Status pengumuman harus dipilih.',
            'status.in' => 'Status pengumuman harus active atau inactive.',

        ];
    }

    public function mount(Announcement $announcement)
    {
        $this->announcement = $announcement;

        $this->fill(
            $announcement->only('title', 'slug', 'content', 'image', 'status'),
        );
    }

    public function update()
    {
        $validatedData = $this->validate();

        $announcement = $this->announcement;

        if ($this->newImage) {
            if($announcement->image !== 'admin/img/announcement.png'){
                Storage::delete($announcement->image);
            }
            $validatedData['image'] = $this->newImage->store(path: 'admin/img');
        } else if (!$this->newImage && $this->image) {
            $validatedData['image'] = $this->image;
        } else {
            $validatedData['image'] = 'admin/img/announcement.png';
        }

        $announcement->update($validatedData);

        session()->flash('success', 'Pengumuman berhasil diubah.');
        $this->redirect('/admin/announcements', navigate: true);
    }

    public function removeImage()
    {
        $this->reset('image');
        $this->reset('newImage');
    }

    public function render()
    {
        return view('livewire.admin.announcement.edit', [
            'header' => 'Edit Pengumuman',
        ]);
    }
}
