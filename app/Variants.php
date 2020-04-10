<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Variants extends Model
{
	protected $fillable = [
		'variant_id',
		'product_id',
		'title',
		'is_pack'
	];
}
