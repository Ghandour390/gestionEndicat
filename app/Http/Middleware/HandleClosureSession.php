<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class HandleClosureSession
{
    public function handle(Request $request, Closure $next)
    {
        if ($request->hasSession()) {
            $request->session()->start();
        }
        
        return $next($request);
    }
}