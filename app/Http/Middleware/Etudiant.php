<?php

namespace App\Http\Middleware;

use Closure;
use Redirect;

class Etudiant
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
        if(session('typeUtilisateur') == 1){
          return $next($request);
        }else {
          return Redirect::route('login');
        }

    }
}
