<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
	protected $table = "restaurant_schedules";

	protected $fillable = [
		'restaurant_id',
		'day',
		'time_open',
		'time_closed',
	];
}
