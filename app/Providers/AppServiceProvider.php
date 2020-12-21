<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Page;
use App\Models\Skill;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        Schema::defaultStringLength(255);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        view()->share('categories', Category::all());
        view()->share('skills', Skill::all());
        view()->share('page', Page::all());

        
    }
}
