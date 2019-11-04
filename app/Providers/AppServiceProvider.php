<?php

namespace App\Providers;

use App\Repositories\Eloquent\MaleEloquentRepository;
use App\Repositories\MaleRepositoryInterface;
use App\Services\Impl\MaleService;
use App\Services\MaleServiceInterface;
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
        $this->app->singleton(MaleServiceInterface::class,MaleService::class);
        $this->app->singleton(MaleRepositoryInterface::class,MaleEloquentRepository::class);
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
