<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BeverageList extends Model
{
	protected $fillable = [
		'size'
		,'temprate'
		,'ice'
		,'sweet'
		,'number',];

		public function order()
		{
			return $this->belongsTo(Order::class);
		}
		public function product()
		{
			return $this->belongsTo(Product::class);
		}

	}
