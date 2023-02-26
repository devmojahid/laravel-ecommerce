<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;
use Closure;
use Symfony\Component\HttpFoundation\Response;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     */
    protected function redirectTo(Request $request): ?string
    {
        return $request->expectsJson() ? null : route('login');
    }
    // public function handle(Request $request, Closure $next): Response

    // {
    //     if(auth()->user()->role==3){
    //         return $next($request);
    //     }else{
    //         return redirect()->route("dashboard")->with("error","Your Are not admin");
    //     }
    // }
}
