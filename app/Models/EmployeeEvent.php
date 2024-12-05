<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EmployeeEvent extends Model
{
    protected $table = 'employee_event';

    protected $fillable = [
        'employee_id',
        'event_id',
    ];
}
