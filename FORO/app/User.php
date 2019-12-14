<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Persona;
use App\Tema;
use App\Opinion;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $table = 'users';
    //////////////// de regreso
    public function persona()
    {
        return $this->belongsTo(Persona::class);
    }
    ////////////////// ida
    public function temas()
    {
        return $this->hasMany(Tema::class);
    }
    //////////////////
    public function opiniones()
    {
        return $this->hasMany(Opinion::class);
    }
}
