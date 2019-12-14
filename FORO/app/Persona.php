<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
class Persona extends Model
{
    protected $table = 'personas';

    public function user()
    {
    	return $this -> hasOne(User::class);
    }
}
