<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\LocalUser;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'nim' => 'required|string',
            'password' => 'required|string|min:8',
        ]);

        $nim = $request->input('nim');
        $password = $request->input('password');

        try {
            // Authenticate via API using NIM as username
            $response = Http::asForm()->post('https://cis.del.ac.id/api/jwt-api/do-auth', [
                'username' => $nim,
                'password' => $password,
            ]);

            if ($response->successful()) {
                $data = $response->json();

                if (isset($data['token'])) {
                    $token = $data['token'];
                    $user = $data['user'] ?? [];
                    $usernameFromAPI = $user['username'] ?? null;

                    if ($usernameFromAPI) {
                        // Fetch student data by NIM
                        $profileResponse = Http::withToken($token)->get(
                            'https://cis.del.ac.id/api/library-api/mahasiswa?nama=&nim=' . $nim . '&angkatan=&userid=&username=&prodi=&status=Aktif&limit'
                        );

                        if ($profileResponse->successful()) {
                            $mahasiswaList = $profileResponse->json();
                            $mahasiswa = $mahasiswaList['data']['mahasiswa'][0] ?? null;

                            if ($mahasiswa && ($mahasiswa['prodi_name'] ?? null) === 'DIII Teknologi Informasi') {
                                $nama     = $mahasiswa['nama'] ?? $user['username'];
                                $prodi    = $mahasiswa['prodi_name'] ?? null;
                                $angkatan = $mahasiswa['angkatan'] ?? null;

                                // Map NIM to role
                                $roleMap = [
                                    '11323033' => 'admin',
                                    // Tambahkan NIM lain di sini
                                    // '11323033' => 'mahasiswa', // Boleh ditulis, tapi default juga akan jadi mahasiswa jika tidak ada di sini
                                    // '11323034' => 'admin2',
                                    // '11323035' => 'bendahara',
                                    // dst.
                                ];
                                $role = $roleMap[$nim] ?? 'mahasiswa';

                                // Save/update to local_users table
                                $localUser = LocalUser::updateOrCreate(
                                    ['username' => $usernameFromAPI],
                                    [
                                        'nama' => $nama,
                                        'nim' => $nim,
                                        'angkatan' => $angkatan,
                                        'prodi' => $prodi,
                                        'role' => $role,
                                    ]
                                );

                                session([
                                    'token' => $token,
                                    'user' => array_merge($user, [
                                        'nama' => $nama,
                                        'prodi' => $prodi,
                                        'role' => $role,
                                    ])
                                ]);

                                return $this->redirectBasedOnRole($role);
                            } else {
                                return back()->withErrors([
                                    'login' => 'Hanya mahasiswa DIII Teknologi Informasi yang diperbolehkan login.'
                                ]);
                            }
                        }

                        return back()->withErrors(['login' => 'Gagal mengambil data mahasiswa.']);
                    }

                    return back()->withErrors(['login' => 'NIM tidak ditemukan.']);
                }
            }

            // Fallback to local account
            $localUser = LocalUser::where('nim', $nim)->first();

            if ($localUser && Hash::check($password, $localUser->password)) {
                session([
                    'user' => [
                        'username' => $localUser->username,
                        'nama' => $localUser->nama ?? $localUser->username,
                        'role' => $localUser->role ?? 'mahasiswa',
                    ]
                ]);

                return $this->redirectBasedOnRole($localUser->role ?? 'mahasiswa');
            }

            return back()->withErrors(['login' => 'Login gagal. Pastikan NIM dan password benar.']);
        } catch (\Exception $e) {
            return back()->withErrors(['login' => 'Terjadi kesalahan: ' . $e->getMessage()]);
        }
    }

    public function logout()
    {
        session()->forget('user');
        session()->forget('token');
        return redirect()->route('login')->with('success', 'Berhasil logout.');
    }

    private function redirectBasedOnRole($role)
    {
        switch ($role) {
            case 'admin':
            case 'admin2':
                return redirect('/admin')->with('success', 'Login berhasil!');
            case 'bendahara':
                return redirect('/admin/keuangan')->with('success', 'Login berhasil!');
            case 'mahasiswa':
            default:
                return redirect('/')->with('success', 'Login berhasil!');
        }
    }
}