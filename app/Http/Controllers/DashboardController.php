<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
{
    // Ambil data user dari session
    $user = session('user');
    $role = session('role');

    // Cek apakah user login
    if (!$user) {
        return redirect('/login')->withErrors(['email' => 'Silakan login terlebih dahulu.']);
    }

    // Kalau role-nya mahasiswa, cek prodi harus DIII Teknologi Informasi
    if ($role === 'mahasiswa') {
        if (!isset($user['prodi']) || $user['prodi'] !== 'DIII Teknologi Informasi') {
            session()->forget('user');
            session()->forget('token');
            return redirect('/login')->withErrors(['email' => 'Akses hanya untuk mahasiswa DIII Teknologi Informasi.']);
        }
    }

    // Kalau bukan mahasiswa, lanjutkan (admin lokal, bendahara, dll)
    return view('admin.dashboard', compact('user'));
}

}
