<?php

namespace App\Http\Middleware;

use Closure;
use Hash;

class CheckUserChangedPassword
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
    	if(!request()->is('troca-senha*'))
    	{
    		$user = auth()->user();
    		
    		if(!is_null($user) && Hash::check('123456', $user->password) )
    		{
    			return redirect()->route('user.trocaSenha');
    		}
    	}

    	return $next($request);
    }
}
