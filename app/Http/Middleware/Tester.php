<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Tester
{
    /**
     * Handle an incoming request. Will just showw that it went to this middleware
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        echo "This request went through TesterMiddleware.<br>";
        return $next($request);
    }
}
