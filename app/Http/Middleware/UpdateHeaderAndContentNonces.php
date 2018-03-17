<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Response;

class UpdateHeaderAndContentNonces
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

        /** @var Response $response */
        $response = $next($request);

        $csp = $response->headers->get('Content-Security-Policy');
        $newCsp = preg_replace('/nonce-.+?(?=\')/', 'nonce-'.cspNonce(), $csp);
        $response->headers->set('Content-Security-Policy', $newCsp);

        $newContent = preg_replace('/(?<=nonce=")(.*)(?=")/', cspNonce(), $response->getContent());


        $response->setContent($newContent);

        return $response;
    }
}
