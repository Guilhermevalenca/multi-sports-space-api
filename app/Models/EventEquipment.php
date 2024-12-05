<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EventEquipment extends Model
{
    protected $table = 'event_equipment';

    protected $fillable = [
        'delivery',
        'pick_up',
    ];
}
