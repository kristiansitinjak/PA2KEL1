<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login'); // atau 'auth.login' tergantung lokasi file blade
    }

    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string|min:8',
        ]);
    
        $username = $request->input('username');
        $password = $request->input('password');
    
        try {
            $response = Http::asForm()->post('https://cis.del.ac.id/api/jwt-api/do-auth', [
                'username' => $username,
                'password' => $password,
            ]);
    
            if ($response->successful()) {
                $data = $response->json();
    
                if (isset($data['token'])) {
                    $token = $data['token'];
                    $user = $data['user'] ?? [];
    
                    $username = $user['username'] ?? null;
    
                    if ($username) {
                        // Perbaiki bagian ini
                        $profileResponse = Http::withToken($token)->get(
                            'https://cis.del.ac.id/api/library-api/mahasiswa?nama=&nim=&angkatan=&userid=&username=&prodi=&status=Aktif&limit',
                            [
                                'username' => $username,
                                'status' => 'Aktif',
                            ]
                        );
    
                        if ($profileResponse->successful()) {
                            $mahasiswaList = $profileResponse->json();
                            $mahasiswa = $mahasiswaList['data']['mahasiswa'][0] ?? null;
                            // dd($mahasiswaList);
    
                            if ($mahasiswa && ($mahasiswa['prodi_name'] ?? null) === 'DIII Teknologi Informasi') {
                                session([
                                    'token' => $token,
                                    'user' => array_merge($user, [
                                        'nama' => $mahasiswa['nama'] ?? $user['username'] ?? 'User',
                                        'prodi' => $mahasiswa['prodi_name']
                                    ])
                                ]);
    
                                return redirect('/admin')->with('success', 'Login berhasil!');
                            } else {
                                return back()->withErrors([
                                    'login' => 'Hanya mahasiswa DIII Teknologi Informasi yang diperbolehkan login.'
                                ]);
                            }
                        }
    
                        return back()->withErrors(['login' => 'Gagal mengambil data mahasiswa.']);
                    }
    
                    return back()->withErrors(['login' => 'Username tidak ditemukan.']);
                }
            }
    
            return back()->withErrors(['login' => 'Email atau password salah.']);
        } catch (\Exception $e) {
            return back()->withErrors(['login' => 'Terjadi kesalahan: ' . $e->getMessage()]);
        }
    }
       

    public function logout()
    {
        session()->forget('user');
        return redirect()->route('login');
    }
}