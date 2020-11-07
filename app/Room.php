<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
	public function ipd() {
        return $this->hasMany(ipd::class);
    }
}
