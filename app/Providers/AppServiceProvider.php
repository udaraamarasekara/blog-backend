<?php

namespace App\Providers;

use App\Modules\Image\ImageRepository;
use App\Modules\Image\ImageRepositoryInterface;
use App\Modules\Post\PostRepository;
use App\Modules\Post\PostRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
      $this->app->bind(PostRepositoryInterface::class,PostRepository::class);
      $this->app->bind(ImageRepositoryInterface::class,ImageRepository::class);  
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
