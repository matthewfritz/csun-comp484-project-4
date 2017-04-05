<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Role;
use App\Models\User;

use Auth;

class AdminController extends Controller
{
    public function getAdminPanel() {
    	return view('pages.admin.index');
    }

    public function getUsers() {
        $users = User::with('roles')
            ->where('id', '<>', Auth::id())
            ->orderBy('username', 'ASC')
            ->get();

        return view('pages.admin.users', compact('users'));
    }

    public function postPromoteUser($id) {
        $u = User::with('roles')
            ->where('id', $id)
            ->firstOrFail();

        if(!$u->isAdmin()) {
            $u->roles()->attach('admin');
        }

        return redirect()->back()->with('success', "User {$u->username} has been granted admin rights!");
    }

    public function postDemoteUser($id) {
        $u = User::with('roles')
            ->where('id', $id)
            ->firstOrFail();

        if($u->isAdmin()) {
            $u->roles()->detach('admin');
        }

        return redirect()->back()->with('success', "User {$u->username} has had admin rights revoked!");
    }
}
