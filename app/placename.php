<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class placename extends Model
{
    protected $fillable = [
        'cid',
        'did',
        'img',
        'placeName'
    ];
}
