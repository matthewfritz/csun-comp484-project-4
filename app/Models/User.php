<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'email', 'display_name', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * Returns all of the reviews written by this user.
     *
     * @return Builder
     */
    public function reviews() {
        return $this->hasMany(Review::class, 'user_id')->orderBy('id', 'DESC');
    }

    /**
     * Returns all roles for this user.
     *
     * @return Builder
     */
    public function roles() {
        return $this->belongsToMany(Role::class, 'user_roles', 'user_id', 'role');
    }

    /**
     * Returns whether this user instance has the specified role.
     *
     * @param string $role_key The system name of the role to check
     * @return boolean
     */
    public function hasRole($role_key) {
        if(!isset($this->roles)) {
            $this->load('roles');
        }

        foreach($this->roles as $role) {
            if($role->system_name == $role_key) {
                return true;
            }
        }

        return false;
    }

    /**
     * Returns whether this user is an administrator.
     *
     * @return boolean
     */
    public function isAdmin() {
        return $this->hasRole('admin');
    }

    /**
     * Returns whether this user is a reviewer.
     *
     * @return boolean
     */
    public function isReviewer() {
        return $this->hasRole('reviewer');
    }
}
