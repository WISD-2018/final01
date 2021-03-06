<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
		'name'
		,'price'
		,'image',];

	public $timestamps = false;

		public function beveragelists()
		{
			return $this->hasMany(BeverageList::class);
		}
}
