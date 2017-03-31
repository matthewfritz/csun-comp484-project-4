<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
	protected $primaryKey = "system_name";
	protected $fillable = ['system_name', 'display_name'];

    public $incrementing = false;
}
