<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EventSpace extends Model
{
    protected $table = 'event_space';

    protected $fillable = [
        'event_id',
        'space_id',
    ];
}
