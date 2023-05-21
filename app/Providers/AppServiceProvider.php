<?php

namespace App\Providers;

use App\Contracts\CommentServiceContract;
use App\Services\CommentService;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Schema::defaultStringLength(191);
        $this->app->bind(CommentServiceContract::class, CommentService::class);
    }
}
