<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use Illuminate\Http\Response;

class AdminAuth
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
        if (Auth::user()->profile_id == 1)
        {
            return $next($request);
        }
        else
        {
            if($request->ajax())
                return new Response(view("middleware.noPermissionAjax"));
            else
               return new Response(view("middleware.noPermission"));
        }
        return $next($request);
    }
}
