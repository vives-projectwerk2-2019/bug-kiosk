<?php

namespace App\Http\Middleware;

use Auth;
use Closure;

class CheckAdmin
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
        $userRoles = Auth::User()->roles->pluck('name');

        if (!$userRoles->contains('admin')) {
            return redirect('/permission_denied');
        }
        return $next($request);
    }
}
