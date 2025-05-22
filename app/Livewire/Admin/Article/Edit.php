<?php

namespace App\Livewire\Admin\Article;

use App\Models\Article;
use Livewire\Component;
use App\Models\Category;
use Livewire\WithFileUploads;
use Livewire\Attributes\Title;
use Illuminate\Validation\Rule;
use Livewire\Attributes\Layout;
use Illuminate\Support\Facades\Storage;

#[Title('Edit Artikel | SMK ISLAM SEKARAN - Jalan Raya Sekaran, 01, Sekaran Lamongan')]
#[Layout('components.layouts.dashboard')]
class Edit extends Component
{
    use WithFileUploads;

    public Article $article;

    public $category_id;
    public $title;
    public $slug;
    public $image;
    public $content;
    public $status;
    public $newImage;

    public function rules()
    {
        return [
            'category_id' => ['required', 'exists:categories,id'],
            'title' => ['required', 'string', 'max:255'],
            'content' => ['required', 'string'],
            'newImage' => ['nullable', 'image', 'mimes:jpg,jpeg,png', 'max:2048'],
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

            'newImage.image' => 'File yang diunggah harus berupa gambar.',
            'newImage.mimes' => 'Gambar harus berformat jpg, jpeg, atau png.',
            'newImage.max' => 'Ukuran gambar tidak boleh lebih dari 2MB.',

            'status.required' => 'Status artikel harus dipilih.',
            'status.in' => 'Status artikel harus salah satu dari: published, draft, atau archived.',
        ];
    }

    public function mount(Article $article)
    {
        $this->article = $article;

        $this->fill(
            $article->only('category_id', 'title', 'slug', 'content', 'image', 'status'),
        );
    }

    public function update()
    {
        $validatedData = $this->validate();

        $article = $this->article;

        if ($this->newImage) {
            if($article->image !== 'admin/img/article.png'){
                Storage::delete($article->image);
            }
            $validatedData['image'] = $this->newImage->store(path: 'admin/img');
        } else if (!$this->newImage && $this->image) {
            $validatedData['image'] = $this->image;
        } else {
            $validatedData['image'] = 'admin/img/article.png';
        }

        $article->update($validatedData);

        session()->flash('success', 'Artikel berhasil diubah.');
        $this->redirect('/admin/articles', navigate: true);
    }

    public function removeImage()
    {
        $this->reset('image');
        $this->reset('newImage');
    }

    public function render()
    {
        return view('livewire.admin.article.edit', [
            'header' => 'Edit Artikel',
            'categories' => Category::paginate(5),
        ]);
    }
}
