<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // Ambil data user dari session
        $user = session('user');

        // Cek apakah user login
        if (!$user) {
            return redirect('/login')->withErrors(['email' => 'Silakan login terlebih dahulu.']);
        }

        // Validasi prodi (cadangan jika middleware dilewati)
        if (!isset($user['prodi']) || $user['prodi'] !== 'DIII Teknologi Informasi') {
            session()->forget('user');
            session()->forget('token');
            return redirect('/login')->withErrors(['email' => 'Akses hanya untuk mahasiswa DIII Teknologi Informasi.']);
        }

        // Tampilkan dashboard dengan data user
        return view('admin.dashboard', compact('user'));
    }
}
