<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class twocontent extends Model
{
    protected $fillable = [
        'pid',
        'img',
        'content'
    ];
}
