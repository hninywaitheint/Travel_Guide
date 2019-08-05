<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class placenameTable extends Model
{
    protected $fillable = [
        'cid',
        'did',
        'img',
        'placeName'
    ];
}
