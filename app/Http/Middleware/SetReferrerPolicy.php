<?php

namespace App\Http\Middleware;

use Closure;

class SetReferrerPolicy
{
    public function handle($request, Closure $next)
    {
        $response = $next($request);

        $response->headers->set('referrer-policy', 'strict-origin');
        $response->headers->set('Strict-Transport-Security', 'max-age=31536000; includeSubDomains');

        return $response;
    }
}
