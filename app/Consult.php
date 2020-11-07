<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Consult extends Model
{
    protected $fillable = [
        'speciality', 'doctor', 'pt_name', 'pt_city', 'pt_contact'
    ];
}
