<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
	protected $fillable = [
		'name'
		,'address'
		,'country'
		,'region'
		,'phone'
		,'businesshour'];

		public function orders()
		{
			return $this->hasMany(Order::class);
		}


	}