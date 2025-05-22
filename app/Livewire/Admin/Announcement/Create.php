<?php

namespace App\Livewire\Admin\Announcement;

use App\Models\Announcement;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithFileUploads;

#[Title('Buat Pengumuman | SMK ISLAM SEKARAN - Jalan Raya Sekaran, 01, Sekaran Lamongan')]
#[Layout('components.layouts.dashboard')]
class Create extends Component
{
    use WithFileUploads;

    public $title;
    public $content;
    public $image;
    public $status;

    public function rules()
    {
        return [
            'title' => ['required', 'string', 'max:255'],
            'content' => ['required', 'string'],
            'image' => ['nullable', 'image', 'mimes:jpg,jpeg,png', 'max:2048'],
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

            'image.image' => 'File yang diunggah harus berupa gambar.',
            'image.mimes' => 'Gambar harus berformat jpg, jpeg, atau png.',
            'image.max' => 'Ukuran gambar tidak boleh lebih dari 2MB.',

            'status.required' => 'Status pengumuman harus dipilih.',
            'status.in' => 'Status pengumuman harus aktif atau tidak aktif.',

        ];
    }

    public function save()
    {
        $validatedData = $this->validate();

        if ($this->image) {
            $validatedData['image'] = $this->image->store(path: 'admin/img');
        } else {
            $validatedData['image'] = 'admin/img/announcement.png';
        }

        Announcement::create($validatedData);

        session()->flash('success', 'Pengumuman berhasil ditambahkan.');
        $this->redirect('/admin/announcements', navigate: true);
    }

    public function removeImage()
    {
        $this->reset('image');
    }

    public function render()
    {
        return view('livewire.admin.announcement.create', [
            'header' => 'Buat Pengumuman',
        ]);
    }
}
