<?php

namespace App\Http\Middleware;

use App\Models\Guest;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Symfony\Component\HttpFoundation\Response;

class TrackGuestMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response) $next
     */
    public function handle(Request $request, \Closure $next): Response
    {
        // Or get all cookies as an array
        $allCookies = $request->cookies->all();
        $xsrfToken = $allCookies['XSRF-TOKEN'] ?? null;

        // Check and create the record if it doesn't exist
        if ($allCookies != null) {
            Guest::firstOrCreate(
                ['token' => $xsrfToken],
                ['request' => json_encode($allCookies)]
            );
            session(['guest_id' => $allCookies]);
        } else {
            $uniqueCookieValue = Str::uuid()->toString();
            Guest::firstOrCreate(
                ['token' => $uniqueCookieValue],
                ['request' => json_encode($request->all())]
            );
            session(['guest_id' => $uniqueCookieValue]);
        }

        // Set the 'guest_id' session variable
        return $next($request);
    }
}
