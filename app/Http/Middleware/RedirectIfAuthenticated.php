<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  ...$guards
     * @return mixed
     */
    public function handle(Request $request, Closure $next, ...$guards)
    {
        $guards = empty($guards) ? [null] : $guards;

        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check()) {

                if($guard === 'admin'){
                    return redirect()->route('admin.home');
                }
                // if($guard === 'customer'){
                //     return redirect()->route('customer.home');
                // }
                // if($guard === 'tourguide'){
                //     return redirect()->route('tourguide.home');
                // }
                // if($guard === 'serviceprovider'){
                //     return redirect()->route('serviceprovider.home');
                // }
                if($guard === 'tourist'){
                    return redirect()->route('tourist.home');
                }
                return redirect()->route('user.home');
                // return redirect(RouteServiceProvider::HOME);
            }
        }

        return $next($request);
    }
}
