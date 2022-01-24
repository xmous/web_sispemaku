<?php

namespace App\Http\Middleware;

use Closure;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */

    public function handle($request, Closure $next, $role)
    {
        $user = \Auth::User()->level;
        $status = \Auth::User()->del;
        // dd($role);
        if ($user == $role) {
            if ($status == '0') {
                return $next($request);
            }
        }
        return redirect('/');
    }
}
