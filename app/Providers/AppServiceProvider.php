<?php

namespace App\Providers;

use App\Repositories\StatsRepository;
use App\Repositories\StatsRepositoryInterface;
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
        $this->app->singleton(StatsRepositoryInterface::class, function ($app) {
            return new StatsRepository(api_base(), config('ark.http_options'));
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
