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

	public function schedules() {
		return $this->hasMany(Schedule::class);
	}

	public function items() {
		return $this->hasMany(MenuItem::class);
	}

	public function reviews() {
		return $this->hasMany(Review::class)->orderBy('id', 'DESC');
	}
}
