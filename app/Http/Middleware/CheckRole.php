<?php

namespace App\Http\Middleware;

use Closure;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if($request->user() === null)
        //if the request does not hava a logedin user
        //of the requested does not have any user that matches some data in the users table
        {
        	return response("Insufficient permission", 401);
        }
    
        $action = $request->route()->getAction();
        //get the array of actions at the route call or route method
        
        $roles = isset($action['roles']) ? $action['roles'] : null;
        //if the 'role' action is specified in the route
        //then store the 'role' action array in the $roles variable
    
        if($request->user()->hasAnyRole($roles) || !$roles)
        //if the requested user has any of the roles in found in the $role variable
        //or if there are no roles specified or the $roles variable is empty
        //proceed to the next url or resource
        {
        	return  $next($requrest);
        }
        //else return error;
        return response("Insufficient permission", 401);
    }
}
