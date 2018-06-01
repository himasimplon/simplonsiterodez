<?php

namespace App\Http\Middleware;

use Closure;
use DB;

class Backoffice
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
        // $admin_simplon =  request->users;
        // return $admin_simplon;

        $ip = $request->ip();
        if($ip == '127.0.0.1'){
            throw new \Exception("Your ip is correct");
        }
        return $next($request);
    }
}
