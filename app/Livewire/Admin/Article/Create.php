<?php

namespace App\Livewire\Admin\Article;

use App\Models\Article;
use Livewire\Component;
use App\Models\Category;
use Livewire\Attributes\Title;
use Illuminate\Validation\Rule;
use Livewire\Attributes\Layout;
use Livewire\WithFileUploads;

#[Title('Buat Artikel | SMK ISLAM SEKARAN - Jalan Raya Sekaran, 01, Sekaran Lamongan')]
#[Layout('components.layouts.dashboard')]
class Create extends Component
{
    use WithFileUploads;

    public $category_id;
    public $title;
    public $image;
    public $content;
    public $status;

    public function rules()
    {
        return [
            'category_id' => ['required', 'exists:categories,id'],
            'title' => ['required', 'string', 'max:255'],
            'content' => ['required', 'string'],
            'image' => ['nullable', 'image', 'mimes:jpg,jpeg,png', 'max:2048'],
            'status' => ['required', Rule::in(['published', 'draft', 'archived'])],
        ];
    }

    public function messages()
    {
        return [
            'category_id.required' => 'Kategori harus dipilih.',
            'category_id.exists' => 'Kategori yang dipilih tidak valid.',

            'title.required' => 'Judul artikel harus diisi',
            'title.string' => 'Format judul artikel tidak valid',
            'title.max' => 'Judul artikel tidak boleh lebih dari :max karakter',

            'content.required' => 'Konten artikel harus diisi',
            'content.string' => 'Format konten artikel tidak valid',

            'image.image' => 'File yang diunggah harus berupa gambar.',
            'image.mimes' => 'Gambar harus berformat jpg, jpeg, atau png.',
            'image.max' => 'Ukuran gambar tidak boleh lebih dari 2MB.',

            'status.required' => 'Status artikel harus dipilih.',
            'status.in' => 'Status artikel harus salah satu dari: published, draft, atau archived.',

        ];
    }

    public function save()
    {
        $validatedData = $this->validate();

        if ($this->image) {
            $validatedData['image'] = $this->image->store(path: 'admin/img');
        } else {
            $validatedData['image'] = 'admin/img/article.png';
        }

        Article::create($validatedData);

        session()->flash('success', 'Artikel berhasil ditambahkan.');
        $this->redirect('/admin/articles', navigate: true);
    }

    public function removeImage()
    {
        $this->reset('image');
    }

    public function render()
    {
        return view('livewire.admin.article.create',[
            'header' => 'Buat Artikel',
            'categories' => Category::paginate(5)
        ]);
    }
}
