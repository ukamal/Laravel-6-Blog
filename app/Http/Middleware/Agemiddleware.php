<?php

namespace App\Http\Middleware;

use Closure;

class Agemiddleware
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
        if ($request->age <= 100) {
            return redirect('home');
        }
        return $next($request);
    }
}
