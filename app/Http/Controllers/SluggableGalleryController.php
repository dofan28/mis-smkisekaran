<?php

namespace App\Http\Controllers;

use App\Models\Galleries;
use Illuminate\Http\Request;
use Cviebrock\EloquentSluggable\Services\SlugService;

class SluggableGalleryController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $slug = SlugService::createSlug(Galleries::class, 'slug', $request->title);
        return response()->json(['slug' => $slug]);
    }
}
