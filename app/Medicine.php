<?php

namespace App;

use App\User;

use Illuminate\Database\Eloquent\Model;

class Medicine extends Model
{
  protected $fillable = [
      'desc'
  ];


  public function user()
  {
      return $this->belongsTo(User::class);
  }

}
