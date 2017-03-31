<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\CreateUserRequest;
use App\Http\Requests\ChangePasswordRequest;

use App\Models\Role;
use App\Models\User;

use Auth;

class UserController extends Controller
{
    public function getRegister() {
    	return view('pages.user.register');
    }

    public function postRegister(CreateUserRequest $request) {
    	$u = User::create([
    		'username' => $request->input('username'),
    		'email' => $request->input('email'),
    		'password' => bcrypt($request->input('password')),
    		'display_name' => $request->input('display_name')
    	]);

    	// give the newly-registered user a reviewer role
    	$u->roles()->attach('reviewer');

    	// authenticate the new user automatically
    	Auth::login($u);

    	return redirect('/')->with('success', "{$u->display_name} has been registered successfully!");
    }

    public function getChangePassword() {
    	return view('pages.user.changepassword');
    }

    public function postChangePassword(ChangePasswordRequest $request) {
    	Auth::user()->password = bcrypt($request->input('password'));
    	Auth::user()->save();
    	Auth::user()->touch();

    	return redirect('profile')->with('success', "You successfully changed your password!");
    }

    public function getProfile() {
    	return view('pages.user.profile');
    }
}
