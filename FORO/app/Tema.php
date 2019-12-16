<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Opinion;
class Tema extends Model
{
	protected $table = 'temas';

     public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function opiniones()
    {
    	return $this -> hasMany(Opinion::class);
    }
}
