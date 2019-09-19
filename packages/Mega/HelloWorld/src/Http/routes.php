<?php

Route::get('hello-dashboard', 'Mega\HelloWorld\Http\Controllers\HelloWorldController@index')->defaults('_config', ['view' => 'helloworld::helloworld.index'
])->name('helloworld.index');