<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Article extends Model
{
    use HasFactory;
    use Sluggable;

    protected $guarded = ['id'];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title',
            ],
        ];
    }

    public function scopeSearch($query, $keyword)
    {
        return $query->where('title', 'like', '%' . $keyword . '%')->orWhere('slug', 'like', '%' . $keyword . '%')->orWhere('content', 'like', '%' . $keyword . '%')->orWhere('image', 'like', '%' . $keyword . '%')->orWhere('created_at', 'like', '%' . $keyword . '%')->orWhere('updated_at', 'like', '%' . $keyword . '%')->orWhereHas('category', function ($query) use ($keyword) {
            $query->where('name', 'like', '%' . $keyword . '%');
        });
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'category_id')->withDefault(['category' => 'Pastikan kategori diisi/tidak kosong']);
    }
}
