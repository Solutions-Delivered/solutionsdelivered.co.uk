<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class TrailingSlashMiddleware
{
    /**
     * Handle an incoming request.
     * Redirects URLs without trailing slashes to include them (except for POST requests and files).
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Skip for POST requests
        if ($request->method() !== 'GET') {
            return $next($request);
        }

        $path = $request->path();

        // Skip for root path
        if ($path === '/') {
            return $next($request);
        }

        // Skip if path has a file extension (e.g., .xml, .txt)
        if (preg_match('/\.[a-z0-9]+$/i', $path)) {
            return $next($request);
        }

        // If path doesn't end with a slash, redirect to add it
        if (!str_ends_with($path, '/')) {
            $url = $request->url() . '/';

            if ($request->getQueryString()) {
                $url .= '?' . $request->getQueryString();
            }

            return redirect($url, 301);
        }

        return $next($request);
    }
}
