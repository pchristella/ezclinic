<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
  protected $fillable = ['app_type', 'app_date', 'app_time'];

  public function user(){
    return $this->belongsTo(User::class);
  }
}
