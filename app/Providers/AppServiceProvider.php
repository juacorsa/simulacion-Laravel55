<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use  Illuminate\Support\Facades\Schema; 
use Blade;

class AppServiceProvider extends ServiceProvider
{
    public function boot()
    {
        Schema::defaultStringLength(191);
    }

    public function register()
    {
        $this->app->bind('App\Interfaces\ProveedorRepositoryInterface', 'App\Repositories\ProveedorRepository');
		$this->app->bind('App\Interfaces\ProductoRepositoryInterface', 'App\Repositories\ProductoRepository');
		$this->app->bind('App\Interfaces\MateriaPrimaRepositoryInterface', 'App\Repositories\MateriaPrimaRepository');
    }
}
