<?php

namespace App\Http\Middleware;

use Closure;
use Redirect;

class notLogin
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
        if(session('typeUtilisateur') !== null){
          return Redirect::route('dashboard');
        }else {
          return $next($request);
        }

    }
}
