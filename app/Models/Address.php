<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $fillable = [
        'street',
        'zip_code',
        'state',
        'city',
        'house_number',
        'employee_id',
    ];
}
