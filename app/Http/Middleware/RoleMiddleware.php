<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     * @param $request
     * @param Closure $next
     * @param $role
     * @param null $permission
     * @return mixed
     */
    public function handle($request, Closure $next, $role, $permission = null)
    {
        if(!Auth::check())
        {
            return redirect('login');
        }
        
        $roles      = explode('|', $role);
        $hasRole    = false;

        foreach ($roles as $key => $mrole)
        {
            if(auth()->user()->hasRole($mrole))
                $hasRole = true;
        }

        if(!$hasRole)
        {
        	if(request()->is('protocolo*'))
        		return redirect()->route('protocolo.paramim');
        	else
            	abort(404);
        }
        
        if($permission !== null && !auth()->user()->can($permission))
        {
            abort(404);
        }
        return $next($request);
    }
}