<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Session;

class checkAdmin
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
        if (auth() ->user()->admin == 0) {
            Session::flash('status', 'Vous devez etre administrateur');
            return redirect('home');
        }
        return $next($request);
    }
}
