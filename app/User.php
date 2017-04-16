<?php

namespace App;

use App\Student;
use App\Appointment;
use App\Symptom;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'name', 'email', 'matricno', 'password',
    ];

    public function student()
    {
        return $this->hasOne(Student::class, 'user_id');
    }

    public function appointment()
    {
        return $this->hasMany(Appointment::class);
    }

    public function symptom()
    {
        return $this->hasMany(Symptom::class);
    }

    protected $hidden = [
        'password', 'remember_token',
    ];
}
