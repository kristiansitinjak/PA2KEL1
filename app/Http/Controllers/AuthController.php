<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Services\CampusAuthService;

class AuthController extends Controller
{
    protected $campusAuthService;

    public function __construct(CampusAuthService $campusAuthService)
    {
        $this->campusAuthService = $campusAuthService;
    }

    public function login(Request $request)
    {
        // Validasi input dari user
        $request->validate([
            'nim' => 'required|string',
            'password' => 'required|string',
        ]);

        // Autentikasi dengan API Kampus
        $response = $this->campusAuthService->authenticate($request->nim, $request->password);

        // Debugging: Lihat isi response API
        dd($response);

        // Pastikan API memberikan response yang valid
        if (!isset($response['success']) || !$response['success'] || !isset($response['data'])) {
            return back()->withErrors(['nim' => 'Login gagal, cek kembali NIM dan password.']);
        }

        // Ambil data mahasiswa dari API
        $mahasiswaData = $response['data'];

        // Cek apakah user sudah ada di database
        $user = User::where('nim', $mahasiswaData['nim'])->first();

        // Jika belum ada, buat user baru
        if (!$user) {
            $user = User::create([
                'nim' => $mahasiswaData['nim'],
                'name' => $mahasiswaData['name'],
                'role' => 'mahasiswa', // Default role mahasiswa
                'password' => bcrypt($request->password), // Hanya untuk kebutuhan Laravel (tidak digunakan untuk autentikasi nyata)
            ]);
        }

        // Login user ke Laravel
        Auth::login($user);

        return redirect()->route('dashboard')->with('success', 'Login berhasil!');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login')->with('success', 'Anda telah logout.');
    }
}
