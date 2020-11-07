<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Treatment extends Model
{
    public function ipd() {
        return $this->hasMany(ipd::class);
    }

    public function opd() {
        return $this->hasMany(opd::class);
    }
}
