<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Tema;
class Opinion extends Model
{
	protected $table = 'opiniones';

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function tema()
    {
    	return $this -> belongsTo(Tema::class);    
    }
}
