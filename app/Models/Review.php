<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
	protected $fillable = [
		'restaurant_id',
		'user_id',
		'rating',
		'tagline',
		'body',
	];

	/**
	 * Returns the restaurant associated with this review.
	 *
	 * @return Builder
	 */
	public function restaurant() {
		return $this->hasOne(Restaurant::class, 'id', 'restaurant_id');
	}

	public function getFormattedCreatedAtAttribute() {
		return $this->created_at->format("F d, Y g:i A");
	}
}
