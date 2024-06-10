<?php

namespace App\Http\Middleware;

use App\Models\Role;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $roles): Response
    {
        abort_if(is_null($request->user()), Response::HTTP_UNAUTHORIZED, 'Unauthorized Session');
        $user = $request->user();
        // dd($roles, auth()->user(), $user->role);
        $userRole = $user->role->name;
        $roleNames = explode('|', $roles);

        foreach ($roleNames as $role) {
            if (in_array($userRole, $roleNames) && $user->hasRole($role)) {
                // dd($roles." ".$request->user()->role->name." ".$request->user()->hasRole($role));
                // dd($request);
                return $next($request);
            }
        }

        abort(403, 'Unauthorized.');
    }
}