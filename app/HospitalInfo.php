<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HospitalInfo extends Model
{
    protected $fillable = [
        'hospital_id', 'address', 'location'
    ];
}
