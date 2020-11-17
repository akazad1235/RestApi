<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PoliceStation extends Model
{
    protected $fillable = [
        'policeStationName', 'stationCode','address','district'
    ];
}
