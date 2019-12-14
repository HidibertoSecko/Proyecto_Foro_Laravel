<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
class Tema extends Model
{
	protected $table = 'temas';
     public function user_tema()
    {
        return $this->belongsTo(User::class);
    }
}
