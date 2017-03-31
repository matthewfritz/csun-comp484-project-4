<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\LoginRequest;
use App\Models\User;

use Auth;

class AuthController extends Controller
{
    public function getLogin() {
    	return view('pages.auth.login');
    }

    public function postLogin(LoginRequest $request) {
    	$creds = [
    		'username' => $request->input('username'),
    		'password' => $request->input('password'),
    	];

    	if(Auth::attempt($creds, false)) {
    		return redirect()->intended('/')
    			->with('success', Auth::user()->display_name . " has logged-in successfully!");
    	}

    	return redirect()->back()->withErrors([
    		'Incorrect username / password combination'
    	]);
    }

    public function getLogout() {
        $name = Auth::user()->display_name;
    	Auth::logout();
    	return redirect('/')->with('success', "{$name} has logged-out successfully!");
    }
}
