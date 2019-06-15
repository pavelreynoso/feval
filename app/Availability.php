<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Availability extends Model
{
    protected $table = "availabilities";

    protected $fillable = [
        'name', 'start_date', 'end_date',
    ];
}
