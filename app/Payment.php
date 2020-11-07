<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = [
        'name'
    ];

    public function ipd() {
        return $this->hasMany(ipd::class);
    }
}
