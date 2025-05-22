<?php

namespace App\Http\Controllers;

use App\Models\Events;
use Illuminate\Http\Request;
use Cviebrock\EloquentSluggable\Services\SlugService;

class SluggableEventController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $slug = SlugService::createSlug(Events::class, 'slug', $request->title);
        return response()->json(['slug' => $slug]);
    }
}
