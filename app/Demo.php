<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Demo extends Model
{
    protected $table = 'demos';
    public $fillable = ['name'];
    
}
