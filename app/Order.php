<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
	protected $fillable = ['address',];
	public function beveragelists()
	{
		return $this->hasMany(BeverageList::class);
	}
	public function user()
	{
		return $this->belongsTo(User::class);
	}
	public function store()
	{
		return $this->belongsTo(Store::class);
	}
}
