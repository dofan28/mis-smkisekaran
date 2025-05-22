<?php

namespace App\Http\Controllers;

use App\Models\Pages;
use Illuminate\Http\Request;
use Cviebrock\EloquentSluggable\Services\SlugService;

class SluggablePageController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $slug = SlugService::createSlug(Pages::class, 'slug', $request->title);
        return response()->json(['slug' => $slug]);
    }
}
