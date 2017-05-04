<?php

namespace App;

use App\User;
use App\Availability;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
  protected $fillable = ['app_type', 'app_date', 'app_time'];

  public function user(){
    return $this->belongsTo(User::class);
  }

  public function availability()
    {
        return $this->hasOne(Availability::class, 'availability_id');
    }
}
