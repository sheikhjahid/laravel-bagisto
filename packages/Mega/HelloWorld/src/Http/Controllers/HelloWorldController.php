<?php

namespace Mega\HelloWorld\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}

class HelloWorldController extends Controller
{
    protected $_config;

/**
* Display a listing of the resource.
*
* @return \Illuminate\Http\Response
*/

public function index()
{
    return view('helloworld::helloworld.helloworld');
}

}