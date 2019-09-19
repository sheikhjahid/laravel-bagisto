<?php

namespace  Mega\HelloWorld\Providers;

use Konekt\Concord\BaseModuleServiceProvider;

class ModuleServiceProvider extends BaseModuleServiceProvider
{
    protected $models = [
        \Mega\HelloWorld\Models\Demo::class,
    ];
}