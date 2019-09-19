<?php

namespace Mega\HelloWorld\Models;
// use Mega\HelloWorld\Contracts\Demo as DemoInterface;
use Illuminate\Database\Eloquent\Model;

class Demo extends Model
{
    protected $table = 'demos';
    public $timestamps = true;
    public $fillable = ['name'];
    protected $guarded = [];
    
}
