<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Eloquent\Relations\Relation;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Relation::morphMap([
            'pages' => 'App\\Models\\Pages',
            'announcement' => 'App\\Models\\Announcement',
            'article' => 'App\\Models\\Article',
            'category' => 'App\\Models\\Category',
            'contactmessage' => 'App\\Models\\ContactMessage',
            'events' => 'App\\Models\\Events',
            'galleries' => 'App\\Models\\Galleries',
            'menu' => 'App\\Models\\Menu',
            'settings' => 'App\\Models\\Settings',
            'testimonial' => 'App\\Models\\testimonial',
        ]);
    }
}
