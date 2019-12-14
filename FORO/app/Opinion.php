<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Opinion extends Model
{
	protected $table = 'opiniones';

    public function user_opinion()
    {
        return $this->belongsTo(User::class);
    }
}
