<?php

namespace App;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = ['user_id', 'homeadd', 'colladd', 'erno', 'tel', 'weight', 'height'];

    public function user(){
      return $this->belongsTo(User::class);
    }
}
