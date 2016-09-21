<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public function users()
    {
    	return $this->belongsToMany('App\User', 'user_roles', 'role_id', 'user_id');
    	//Get the users that the role belongs to 
    	//the later artuments are not requried as it is done automatically by laravel
    }
}
