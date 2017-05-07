<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Symptom extends Model
{
  protected $fillable = [
      'disease','symptom','type'
  ];


  public function user()
  {
      return $this->belongsTo(User::class);
  }

}
