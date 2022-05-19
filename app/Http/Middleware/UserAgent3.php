<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class UserAgent3
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if($request->input('token') != 'abc'){
            return redirect('/');
        }
        return $next($request);
    }
}
