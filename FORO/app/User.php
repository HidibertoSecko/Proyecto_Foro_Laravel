<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Persona;
use App\Tema;
use App\Opinion;

class User extends Authenticatable
{
    protected $table = 'users';

    public function tema()
    {
        return $this->hasOne(Tema::class);
    }
  
    public function opiniones()
    {
        return $this->hasMany(Opinion::class);
    }

}
