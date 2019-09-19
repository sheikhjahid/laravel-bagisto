<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Mega\HelloWorld\Contracts\Demo as DemoInterface;
use Mega\HelloWorld\Models\Demo;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        // $this->app->concord->registerModel(
        //     \Mega\HelloWorld\Contracts\Demo::class, \App\Demo::class
        // );
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        
    }
}
