<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class divisionTable extends Model
{
    protected $fillable = ['division_Name','culture','division_lat', 'division_long'];
}
