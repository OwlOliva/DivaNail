<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class RoLeAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        return $next($request);
        if(auth()->role == 1){
            return $next($request);
        }

        return redirect('about')->with('error','У вас нет доступа на страницу администратора');
        
    }
}