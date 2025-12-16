<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class SecurityHeaders
{
    public function handle(Request $request, Closure $next)
    {
        $response = $next($request);

        return $response
            ->header('X-Content-Type-Options', 'nosniff')
            ->header('X-Frame-Options', 'DENY')
            ->header('Referrer-Policy', 'strict-origin-when-cross-origin')
            ->header(
                'Content-Security-Policy',
                "default-src 'self'; 
                 img-src 'self' data: https:;
                 script-src 'self' 'unsafe-inline' 'unsafe-eval';
                 style-src 'self' 'unsafe-inline';
                 font-src 'self' data:;"
            );
    }
}
