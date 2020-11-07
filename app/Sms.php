<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sms extends Model
{
    protected $fillable = [
        'pt_name', 'pt_city', 'pt_contact'
    ];
}
