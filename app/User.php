<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    public function roles()
    {
        return $this->belongsToMany('App\Role', 'user_roles', 'user_id', 'role_id');
        //Get the Roles that the user belongs to 
    	//the later artuments are not requried as it is done automatically by laravel
    }
    
    public function hasAnyRole($roles)
    {
    	//check if it has any of the roles provided in the argument

    	//if a page is accessible by admin and author

    	//then pass these two roles to this function
    	//and check if the user has one of the roles

    	if(is_array($roles))//if we are in an array of roles
    	{
    		foreach ($roles as $role) {//loop through the roles
    			if($this->hasRole($role))
    			{
    				return true;
    			}
    		}
    	}
    	else  	//if we are not in an arry of roles
    	{
    		if($this->hasRole($roles))//just check for the only role
    		{
    			return true;
    		}
    	}
    }

    public function hasRole($role)
    {
    	if($this->roles()->where('name', $role)->first())
    	{
    	//brings in all the role ids assigned to the user from the "user_roles" table
    	//goes to the role table to check the names of thoes role ids
    	//to see if any of the names matches with the name of the role ($role) passed here

    		return true;
    	}
    	return false;
    }
}
