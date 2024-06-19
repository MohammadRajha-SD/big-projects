<?php

namespace App\Providers;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Gate;
use App\Observers\PostObserver;
use App\Models\Post;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Paginator::useBootstrap();
        Schema::defaultStringLength(191);
        Post::observe(PostObserver::class);
        // Gate::define('create', function() {
        //     return auth()->user()->is_admin;
        // });
        // Gate::define('edit', function() {
        //     return auth()->user()->is_admin;
        // });
        // Gate::define('delete', function() {
        //     return auth()->user()->is_admin;
        // });
    }
}
