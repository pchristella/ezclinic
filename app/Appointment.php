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

    protected $table = 'appointments'; // you may change this to your name table
	public $timestamps = false; // set true if you are using created_at and updated_at
	protected $primaryKey = 'my_id'; // the default is id
}
