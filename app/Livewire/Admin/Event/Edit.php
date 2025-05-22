<?php

namespace App\Livewire\Admin\Event;

use App\Models\Events;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\Attributes\Title;
use Illuminate\Validation\Rule;
use Livewire\Attributes\Layout;
use Illuminate\Support\Facades\Storage;

#[Title('Edit Kegiatan | SMK ISLAM SEKARAN - Jalan Raya Sekaran, 01, Sekaran Lamongan')]
#[Layout('components.layouts.dashboard')]
class Edit extends Component
{
    use WithFileUploads;

    public Events $event;

    public $title;
    public $slug;
    public $description;
    public $image;
    public $date;
    public $status;
    public $newImage;

    public function rules()
    {
        return [
            'title' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string'],
            'newImage' => ['nullable', 'image', 'mimes:jpg,jpeg,png', 'max:2048'],
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

            'newImage.image' => 'File yang diunggah harus berupa gambar.',
            'newImage.mimes' => 'Gambar harus berformat jpg, jpeg, atau png.',
            'newImage.max' => 'Ukuran gambar tidak boleh lebih dari 2MB.',

            'date.required' => 'Tanggal kegiatan harus diisi.',
            'date.date' => 'Format tanggal tidak valid.',

            'status.required' => 'Status kegiatan harus dipilih.',
            'status.in' => 'Status kegiatan harus salah satu dari: upcoming, past, atau cancelled.',
        ];
    }

    public function mount(Events $event)
    {
        $this->event = $event;

        $this->fill([
            'title' => $event->title,
            'slug' => $event->slug,
            'description' => $event->description,
            'image' => $event->image,
            'date' => \Carbon\Carbon::parse($event->date)->format('Y-m-d\TH:i'),
            'status' => $event->status,
        ]);
    }

    public function update()
    {
        $validatedData = $this->validate();

        $event = $this->event;

        if ($this->newImage) {
            if($event->image !== 'admin/img/event.png'){
                Storage::delete($event->image);
            }
            $validatedData['image'] = $this->newImage->store(path: 'admin/img');
        } else if (!$this->newImage && $this->image) {
            $validatedData['image'] = $this->image;
        } else {
            $validatedData['image'] = 'admin/img/event.png';
        }

        $event->update($validatedData);

        session()->flash('success', 'Kegiatan berhasil diubah.');
        $this->redirect('/admin/events', navigate: true);
    }

    public function removeImage()
    {
        $this->reset('image');
        $this->reset('newImage');
    }

    public function render()
    {
        return view('livewire.admin.event.edit', [
            'header' => 'Edit Kegiatan',
        ]);
    }
}
