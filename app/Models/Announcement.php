<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Announcement extends Model
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
        return $query->where('title', 'like', '%' . $keyword . '%')->orWhere('slug', 'like', '%' . $keyword . '%')->orWhere('content', 'like', '%' . $keyword . '%')->orWhere('image', 'like', '%' . $keyword . '%')->orWhere('status', 'like', '%' . $keyword . '%')->orWhere('created_at', 'like', '%' . $keyword . '%')->orWhere('updated_at', 'like', '%' . $keyword . '%');
    }
}
