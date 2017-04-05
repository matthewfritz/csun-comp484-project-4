<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\MenuItem;
use App\Models\Restaurant;
use App\Models\Review;
use App\Models\Schedule;
use App\Models\User;

use App\Http\Requests\CreateOrModifyRestaurantRequest;
use App\Http\Requests\CreateHoursRequest;
use App\Http\Requests\CreateMenuItemRequest;
use App\Http\Requests\CreateReviewRequest;

use Auth;

class RestaurantController extends Controller
{
	public function index() {
		if(Auth::check()) {
			if(Auth::user()->isAdmin()) {
				// only admins should be able to see ALL restaurants
				$query = Restaurant::orderBy('display_name', 'ASC');
			}
			else
			{
				$query = Restaurant::active()->orderBy('display_name', 'ASC');
			}
		}
		else
		{
			$query = Restaurant::active()->orderBy('display_name', 'ASC');
		}

		$restaurants = $query->get();

		return view('pages.restaurants.index', compact('restaurants'));
	}

	public function show($id) {
		$restaurant = Restaurant::with('schedules', 'items', 'reviews.user')
			->findOrFail($id);

		// calculate the average of the ratings if we have ratings
		$average = 0;
		if(!empty($restaurant->reviews)) {
			foreach($restaurant->reviews as $review) {
				$average += $review->rating;
			}
			$average /= count($restaurant->reviews);
		}

		return view('pages.restaurants.show', compact('restaurant', 'average'));
	}

	public function create() {
		return view('pages.restaurants.create');
	}

	public function store(CreateOrModifyRestaurantRequest $request) {
		$r = Restaurant::create([
			'display_name' => $request->input('display_name'),
			'street' => $request->input('street'),
			'city' => $request->input('city'),
			'state' => $request->input('state'),
			'website' => $request->input('website'),
		]);

		return redirect()->back()->with('success', "{$r->display_name} has been added successfully!");
	}

	public function edit($id) {
		$restaurant = Restaurant::findOrFail($id);
		return view('pages.restaurants.edit', compact('restaurant'));
	}

	public function update(CreateOrModifyRestaurantRequest $request, $id) {
		$r = Restaurant::findOrFail($id);
		$r->update([
			'display_name' => $request->input('display_name'),
			'street' => $request->input('street'),
			'city' => $request->input('city'),
			'state' => $request->input('state'),
			'website' => $request->input('website'),
		]);
		$r->touch();

		return redirect('restaurants/' . $r->id)->with('success', 'Restaurant has been updated successfully!');
	}

	public function getAddHours($id) {
		$restaurant = Restaurant::findOrFail($id);
		$days = [
			'Monday' => 'Monday',
			'Tuesday' => 'Tuesday',
			'Wednesday' => 'Wednesday',
			'Thursday' => 'Thursday',
			'Friday' => 'Friday',
			'Saturday' => 'Saturday',
			'Sunday' => 'Sunday',
		];
		return view('pages.restaurants.hours.add', compact('restaurant', 'days'));
	}

	public function postAddHours(CreateHoursRequest $request, $id) {
		$r = Restaurant::findOrFail($id);
		$s = Schedule::create([
			'restaurant_id' => $id,
			'day' => $request->input('day'),
			'time_open' => $request->input('time_open'),
			'time_closed' => $request->input('time_closed'),
		]);

		return redirect('restaurants/' . $r->id)->with('success', "Schedule for {$s->day} has been added!");
	}

	public function getAddMenuItem($id) {
		$restaurant = Restaurant::findOrFail($id);
		return view('pages.restaurants.items.add', compact('restaurant'));
	}

	public function postAddMenuItem(CreateMenuItemRequest $request, $id) {
		$restaurant = Restaurant::findOrFail($id);
	}

	public function getAddReview($id) {
		$restaurant = Restaurant::findOrFail($id);
		return view('pages.restaurants.reviews.add', compact('restaurant'));
	}

	public function postAddReview(CreateReviewRequest $request, $id) {
		$restaurant = Restaurant::findOrFail($id);
	}
}