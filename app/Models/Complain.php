<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Complain extends Model
{
    protected $fillable = [
        'reg_id',
        'station_id',
        'complain_name',
        'complain_type',
        'address',
        'image',
        'video',
        'file',
    ];
}
