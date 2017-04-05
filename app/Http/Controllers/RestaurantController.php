<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Restaurant;
use App\Models\User;

use App\Http\Requests\CreateOrModifyRestaurantRequest;

use Auth;

class RestaurantController extends Controller
{
	public function index() {
		$restaurants = Restaurant::orderBy('display_name', 'ASC')
			->get();

		return view('pages.restaurants.index', compact('restaurants'));
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
}