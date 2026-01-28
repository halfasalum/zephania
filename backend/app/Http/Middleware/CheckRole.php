<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckRole
{
    public function handle(Request $request, Closure $next, ...$roles)
    {
        $user = Auth::user();

        if (! $user || ! $user->hasAnyRole($roles)) { abort(403, 'You do not have permission to access this resource.'); }

        return $next($request);
    }
}
