<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
	protected $fillable = [
		'display_name',
		'street',
		'city',
		'state',
		'website',
	];

	public function scopeActive($query) {
		return $query->where('active', 1);
	}
}
