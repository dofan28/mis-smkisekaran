<?php

namespace App\Livewire\Admin\Page\ImageSlider;

use App\Models\Pages;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\Attributes\Title;
use Illuminate\Validation\Rule;
use Livewire\Attributes\Layout;
use Illuminate\Support\Facades\Storage;

#[Title('Edit Halaman Gambar Slider | SMK ISLAM SEKARAN - Jalan Raya Sekaran, 01, Sekaran Lamongan')]
#[Layout('components.layouts.dashboard')]
class Edit extends Component
{
    use WithFileUploads;

    public Pages $pageImageSlider;

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
            'title' => ['required', 'string', 'max:55'],
            'type' => ['required', Rule::unique('pages', 'type')->ignore($this->pageImageSlider->id)],
            'content' => ['required', 'string'],
            'newImage' => ['nullable', 'image', 'mimes:jpg,jpeg,png', 'max:2048'],
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Judul halaman gambar slider harus diisi',
            'title.string' => 'Format judul halaman gambar slider tidak valid',
            'title.max' => 'Judul halaman gambar slider tidak boleh lebih dari :max karakter',

            'type.required' => 'Jenis halaman gambar slider harus diisi',
            'type.unique' => 'Jenis halaman gambar slider sudah ada',

            'content.required' => 'Konten halaman gambar slider harus diisi',
            'content.string' => 'Format konten halaman gambar slider tidak valid',

            'newImage.image' => 'File yang diunggah harus berupa gambar.',
            'newImage.mimes' => 'Gambar harus berformat jpg, jpeg, atau png.',
            'newImage.max' => 'Ukuran gambar tidak boleh lebih dari 2MB.',
        ];
    }

    public function mount(Pages $pageImageSlider)
    {

        $this->pageImageSlider = $pageImageSlider;

        $this->fill(
            $pageImageSlider->only('title', 'type', 'category', 'content', 'slug', 'content', 'image'),
        );
    }

    public function update()
    {
        $validatedData = $this->validate();

        $pageImageSlider = $this->pageImageSlider;
        
        if ($this->newImage) {
            if($pageImageSlider->image !== 'admin/img/page.png'){
                Storage::delete($pageImageSlider->image);
            }            
            $validatedData['image'] = $this->newImage->store(path: 'admin/img');
        } else if (!$this->newImage && $this->image) {
            $validatedData['image'] = $this->image;
        } else {
            $validatedData['image'] = 'admin/img/page.png';
        }

        $pageImageSlider->update($validatedData);

        session()->flash('success', 'Halaman gambar slider berhasil diubah.');
        $this->redirect('/admin/pages/imageSlider', navigate: true);
    }

    public function removeImage()
    {
        $this->reset('image');
        $this->reset('newImage');
    }

    public function render()
    {
        return view('livewire.admin.page.image-slider.edit',[
            'header' => 'Edit Halaman Gambar Slider',
        ]);
    }
}
