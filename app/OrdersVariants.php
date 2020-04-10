<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrdersVariants extends Model
{
	protected $fillable = [
		'orderId',
		'variant_id',
		'quantity'
	];
}
