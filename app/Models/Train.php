<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Train extends Model
{
    protected $fillable = [
        'company',
        'departure_station',
        'arrival_station',
        'departure_time',
        'arrival_time',
        'train_number',
        'coaches',
        'is_late',
        'is_cancelled'
    ];
}
