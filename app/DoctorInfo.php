<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DoctorInfo extends Model
{
    protected $fillable = [
        'fee', 'doctor_id'
    ];
}
