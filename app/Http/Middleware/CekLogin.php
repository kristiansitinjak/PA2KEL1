<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CekLogin
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (!session()->has('user') || !session()->has('token')) {
            return redirect('/login')->withErrors(['email' => 'Silakan login terlebih dahulu.']);
        }

        $user = session('user');

        // Debug sementara
        // dd($user);

        // Jika kamu ingin batasi hanya user tertentu (misalnya mahasiswa prodi tertentu), aktifkan ini:
        // if (!isset($user['prodi']) || $user['prodi'] !== 'DIII Teknologi Informasi') {
        //     session()->forget('user');
        //     session()->forget('token');
        //     return redirect('/login')->withErrors(['email' => 'Akses hanya untuk mahasiswa DIII Teknologi Informasi.']);
        // }

        return $next($request);
    }
}
