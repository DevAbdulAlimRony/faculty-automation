<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SignatureMiddleware
{
    //Get app name in Header
    public function handle(Request $request, Closure $next, $headerName = 'X-name'): Response
    {
        $response = $next($request);
        $response->headers->set($headerName, config('app.name'));
        return $response;
    }
}
