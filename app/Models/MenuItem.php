<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MenuItem extends Model
{
	protected $table = "menus";

	protected $fillable = [
		'restaurant_id',
		'item_name',
		'item_description',
		'item_price',
	];
}
