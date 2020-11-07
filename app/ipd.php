<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ipd extends Model
{
    protected $fillable = [
        'patient', 'phone', 'doctor_id', 'hospital_id', 'user_id', 'room_id', 'treatment_id', 'surgery_date', 'arrival_time', 'treatment_time', 'test', 'attendant', 'aadhar', 'payment_id', 'admission_amt', 'discharge_amt', 'insurance', 'billed_amt', 'settled_amt', 'hospital_share', 'glamyo_share', 'status'
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

    public function room()
    {
    	return $this->belongsTo(Room::class);
    }

    public function payment()
    {
        return $this->belongsTo(Payment::class);
    }
}
