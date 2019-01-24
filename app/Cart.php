<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
	protected $fillable = [
		'price',
		'total',
		'name',
		'cost',
		'quantity',
		'image',
		'alltotal',
		'total',];
	public function order()
	{
		return $this->belongsTo(Order::class);
	}
	public function product()
	{
		return $this->belongsTo(Product::class);
	}
}
