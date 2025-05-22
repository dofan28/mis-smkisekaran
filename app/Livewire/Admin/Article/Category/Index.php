<?php

namespace App\Livewire\Admin\Article\Category;

use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use Livewire\Component;
use Livewire\WithoutUrlPagination;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination, WithoutUrlPagination;

    public $name;
    public $categoryId;
    public $isEditMode = false;

    public function rules()
    {
        return [
            'name' => ['required', 'string', 'max:255', Rule::unique('categories', 'name')->ignore($this->categoryId)],

        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Nama kategori harus diisi.',
            'name.string' => 'Nama kategori yang diisi tidak valid.',
            'name.max' => 'Nama kategori tidak boleh lebih dari :max karakter.',
            'name.unique' => 'Nama kategori sudah ada.',
        ];
    }

    public function edit(Category $category)
    {
        $this->name = $category->name;
        $this->categoryId = $category->id;
        $this->isEditMode = true;
    }

    public function save()
    {
        $validatedData = $this->validate();

        if ($this->isEditMode) {
            $category = Category::findOrFail($this->categoryId);
            $category->update($validatedData);
            $this->dispatch('notify', 'Kategori berhasil diubah');
        } else {
            Category::create($validatedData);
            $this->dispatch('notify', 'Kategori berhasil dibuat');
        }

        $this->reset();
    }

    public function delete(Category $category)
    {
        $category->delete();
        $this->dispatch('notify', 'Kategori berhasil dihapus');
        $this->reset();
    }

    public function render()
    {
        return view('livewire.admin.article.category.index', [
            'categories' => Category::paginate(5),
        ]);
    }
}
