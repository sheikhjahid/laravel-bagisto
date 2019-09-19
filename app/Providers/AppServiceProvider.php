<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

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
        //     \Mega\HelloWorld\src\Contracts\HelloWorld::class, \Mega\HelloWorld\src\Models\Demo::class
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
