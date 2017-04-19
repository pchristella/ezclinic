<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = ['title', 'content', 'eventdate', 'eventtime'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
