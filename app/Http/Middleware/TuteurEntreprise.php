<?php

namespace App\Http\Middleware;

use Closure;

class TuteurEntreprise
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
        if(session('typeUtilisateur') == 2){
          return $next($request);
        }else {
          return Redirect::route('login');
        }
    }
}
