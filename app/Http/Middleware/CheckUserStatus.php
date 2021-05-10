<?php

namespace App\Http\Middleware;

use Closure;
use Hash;
use Auth;

class CheckUserStatus
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
    	$user = auth()->user();
    	
    	if(!is_null($user) && $user->status == 1)
    	{
    		Auth::logout();

    		return redirect('/');
    	}
    	
    	return $next($request);
    }
}
