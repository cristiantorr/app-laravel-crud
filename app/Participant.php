<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Participant extends Model
{
    protected $fillable = ['name', 'age', 'email', 'city_id','phone'];

    public function city()
	
	{
		return $this->belongsTo('App\City');
	}


}

