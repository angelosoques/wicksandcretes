<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class IPRestrictionMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $allowedIPs = ['192.168.1.1', '127.0.0.1'];

        $clientIP = $request->ip();

        if (!in_array($clientIP, $allowedIPs)) {
            abort(403, 'Unauthorized. Your IP address is not allowed.');
        }

        return $next($request);
    }
}
