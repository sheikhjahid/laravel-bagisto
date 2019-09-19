<?php

namespace Mega\HelloWorld\Providers;

use Illuminate\Support\ServiceProvider;
use Event;

/**
* HelloWorld service provider
*
* @author    Jane Doe <janedoe@gmail.com>
* @copyright 2018 Webkul Software Pvt Ltd (http://www.webkul.com)
*/
class HelloWorldServiceProvider extends ServiceProvider
{
    /**
    * Bootstrap services.
    *
    * @return void
    */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/../Http/routes.php');
        
        $this->loadTranslationsFrom(__DIR__ . '/../Resources/lang/', 'helloworld');
        $this->loadViewsFrom(__DIR__ . '/../Resources/views', 'helloworld');

        Event::listen('bagisto.admin.layout.head', function($viewRenderEventManager) {
            $viewRenderEventManager;
      });  

        $this->loadMigrationsFrom(__DIR__ .'/../Database/Migrations');
    }

    /**
    * Register services.
    *
    * @return void
    */
    public function register()
    {
        $this->mergeConfigFrom(
            dirname(__DIR__) . '/Config/menu.php', 'menu.admin'
        );
    }
}