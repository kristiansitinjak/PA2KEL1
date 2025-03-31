<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ApiAuthMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        if (!Session::has('api_token')) {
            return redirect()->route('admin.login')->with('error', 'Silakan login terlebih dahulu');
        }

        return $next($request);
    }
}
