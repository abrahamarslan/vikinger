<?php

namespace App\Http\Middleware;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Closure;

class Permission
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $permissions)
    {
        if(strpos($permissions, '|') !== false) {
            $permissions = explode('|',$permissions);
        } else {
            $permissions = [$permissions];
        }
        if($user = Sentinel::check()) {
            if($user->hasAccess($permissions)) {
                return $next($request);
            } else {
                abort(403, 'Unauthorized action.');
            }
        } else {
            return redirect()->route('authentication.getLogin');
        }
    }
}
