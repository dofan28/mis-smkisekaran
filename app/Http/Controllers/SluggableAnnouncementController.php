<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use Illuminate\Http\Request;
use Cviebrock\EloquentSluggable\Services\SlugService;

class SluggableAnnouncementController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $slug = SlugService::createSlug(Announcement::class, 'slug', $request->title);
        return response()->json(['slug' => $slug]);
    }
}
