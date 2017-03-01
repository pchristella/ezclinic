<?php

namespace App;
use App\Medicine;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'name', 'email', 'password',
    ];

    public function medicine()
    {
        return $this->hasMany(Medicine::class);
    }


    protected $hidden = [
        'password', 'remember_token',
    ];
}
