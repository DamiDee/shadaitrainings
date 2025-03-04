<?php

namespace App\Http\Middleware;

use
 
Illuminate\Support\Facades\Auth;

class
 
Authenticate

{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string[]  ...$guards
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */

    
public
 
function
 
handle($request, \Closure
 
$next, ...$guards)
    {
        if (!Auth::check()) {
            return redirect()->route('login'); 
        }

        return $next($request);
    }
}