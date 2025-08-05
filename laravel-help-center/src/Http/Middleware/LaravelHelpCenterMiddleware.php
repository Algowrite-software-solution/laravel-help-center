<?php

namespace Algowrite\LaravelHelpCenter\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class LaravelHelpCenterMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        // Add a header to the response
        $response = $next($request);
        $response->headers->set('X-Laravel-Help-Center-Package', 'true');
        return $response;
    }
}