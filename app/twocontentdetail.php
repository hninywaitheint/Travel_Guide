<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class twocontentdetail extends Model
{
    protected $fillable = [
        'pid',
        'img1',
        'content1',
        'img2',
        'content2'
    ];
}
