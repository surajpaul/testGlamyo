<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class opd extends Model
{
    protected $fillable = [
        'patient', 'phone', 'doctor_id', 'hospital_id', 'user_id', 'treatment_id', 'fee', 'appointment_date', 'appointment_time', 'status', 'prescription'
    ];

    public function treatment()
    {
    	return $this->belongsTo(Treatment::class);
    }

    public function doctor()
    {
    	return $this->belongsTo(User::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function hospital()
    {
    	return $this->belongsTo(User::class);
    }
}
