<?php

namespace App\Http\Middleware;

use App\Models\GuestTracking;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class GuestUrlTrackingMiddlware
{
    /**
     * Handle an incoming request.
     *
     * @param \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response) $next
     */
    public function handle(Request $request, \Closure $next): Response
    {
        $xsrfToken = $request->cookie('XSRF-TOKEN');

        if (!auth()->check() && filled($xsrfToken)) {
            GuestTracking::create([
                'url' => $request->fullUrl(),
                'token' => $xsrfToken,
                'description' => json_encode($request->all()),
            ]);
        }

        return $next($request);
    }
}
