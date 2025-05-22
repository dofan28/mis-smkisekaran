<?php

namespace App\Livewire\Admin\Event;

use App\Models\Events;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\Attributes\Title;
use Illuminate\Validation\Rule;
use Livewire\Attributes\Layout;

#[Title('Buat Kegiatan | SMK ISLAM SEKARAN - Jalan Raya Sekaran, 01, Sekaran Lamongan')]
#[Layout('components.layouts.dashboard')]
class Create extends Component
{
    use WithFileUploads;

    public $title;
    public $description;
    public $image;
    public $date;
    public $status;

    public function rules()
    {
        return [
            'title' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string'],
            'image' => ['nullable', 'image', 'mimes:jpg,jpeg,png', 'max:2048'],
            'date' => ['required', 'date'],
            'status' => ['required', Rule::in(['upcoming', 'past', 'cancelled'])],
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Judul kegiatan harus diisi',
            'title.string' => 'Format judul kegiatan tidak valid',
            'title.max' => 'Judul kegiatan tidak boleh lebih dari :max karakter',

            'description.required' => 'Konten kegiatan harus diisi',
            'description.string' => 'Format konten kegiatan tidak valid',

            'image.image' => 'File yang diunggah harus berupa gambar.',
            'image.mimes' => 'Gambar harus berformat jpg, jpeg, atau png.',
            'image.max' => 'Ukuran gambar tidak boleh lebih dari 2MB.',

            'date.required' => 'Tanggal kegiatan harus diisi.',
            'date.date' => 'Format tanggal tidak valid.',

            'status.required' => 'Status kegiatan harus dipilih.',
            'status.in' => 'Status kegiatan harus salah satu dari: upcoming, past, atau cancelled.',
        ];
    }

    public function save()
    {
        $validatedData = $this->validate();

        if ($this->image) {
            $validatedData['image'] = $this->image->store(path: 'admin/img');
        } else {
            $validatedData['image'] = 'admin/img/event.png';
        }

        Events::create($validatedData);

        session()->flash('success', 'Kegiatan berhasil ditambahkan.');
        $this->redirect('/admin/events', navigate: true);
    }

    public function removeImage()
    {
        $this->reset('image');
    }

    public function render()
    {
        return view('livewire.admin.event.create', [
            'header' => 'Buat Kegiatan'
        ]);
    }
}
