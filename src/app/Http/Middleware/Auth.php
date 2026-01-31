<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\ServiceRequest;

class Auth
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next)
    {
        $token = $request->bearerToken();

        if (!$token) {
            return response()->json(['error' => 'API token is required.'], 401);
        }

        $serviceRequest = ServiceRequest::where('api_token', $token)->first();

        if (!$serviceRequest) {
            return response()->json(['error' => 'Invalid API token.'], 401);
        }

        $request->merge(['authenticated_client' => $serviceRequest]);

        return $next($request);
    }
}
