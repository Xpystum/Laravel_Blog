<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminActiveMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if($this->IsActiveAdmin($request)){
            return $next($request);
        }
        abort(403);
    }

    protected function IsActiveAdmin(Request $request){
        return true;
        // return $request->user()->admin;
    }
}

