<?php

namespace App;

use App\User;
use App\Appointment;
use Illuminate\Database\Eloquent\Model;

class Availability extends Model
{
    protected $fillable = ['date', 'starttime', 'endtime', 'status'];

    public function user(){
      return $this->belongsTo(User::class);
    }

    public function appointment()
    {
        return $this->hasOne(Appointment::class, 'appointment_id');
    }
}
