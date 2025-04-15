<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\LocalUser;  

class RoleMiddleware
{
    public function handle(Request $request, Closure $next, ...$roles)
    {
        // Ambil user yang sedang login dari session atau auth
        $user = auth()->user();  // Pastikan user yang terautentikasi

        // Jika tidak ada user yang login atau role tidak cocok
        if (!$user || !in_array($user->role, $roles)) {
            // Redirect ke halaman login jika role tidak sesuai
            return redirect('/login')->withErrors(['role' => 'Akses ditolak.']);
        }

        return $next($request);
    }
}
