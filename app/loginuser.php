<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class loginuser extends Model
{
    protected $fillable = [
        'username',
        'pass'
    ];
}
