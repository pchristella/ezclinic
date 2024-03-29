<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Announcement extends Model
{
  protected $fillable = [
      'title','content'
  ];


  public function user()
  {
      return $this->belongsTo(User::class);
  }
}
