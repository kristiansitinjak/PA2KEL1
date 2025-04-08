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
            'username' => 'required|string',
            'password' => 'required|string|min:8',
        ]);

        $username = $request->input('username');
        $password = $request->input('password');

        try {
            // Coba login via API CIS
            $response = Http::asForm()->post('https://cis.del.ac.id/api/jwt-api/do-auth', [
                'username' => $username,
                'password' => $password,
            ]);

            if ($response->successful()) {
                $data = $response->json();

                if (isset($data['token'])) {
                    $token = $data['token'];
                    $user = $data['user'] ?? [];
                    $usernameFromAPI = $user['username'] ?? null;

                    if ($usernameFromAPI) {
                        // Ambil data mahasiswa
                        $profileResponse = Http::withToken($token)->get(
                            'https://cis.del.ac.id/api/library-api/mahasiswa?nama=&nim=&angkatan=&userid=&username=' . $usernameFromAPI . '&prodi=&status=Aktif&limit'
                        );

                        if ($profileResponse->successful()) {
                            $mahasiswaList = $profileResponse->json();
                            $mahasiswa = $mahasiswaList['data']['mahasiswa'][0] ?? null;

                            if ($mahasiswa && ($mahasiswa['prodi_name'] ?? null) === 'DIII Teknologi Informasi') {
                                $nama     = $mahasiswa['nama'] ?? $user['username'];
                                $prodi    = $mahasiswa['prodi_name'] ?? null;
                                $nim      = $mahasiswa['nim'] ?? null;
                                $angkatan = $mahasiswa['angkatan'] ?? null;

                                // Simpan/update ke tabel local_users
                                $localUser = LocalUser::updateOrCreate(
                                    ['username' => $usernameFromAPI],
                                    [
                                        'nama' => $nama,
                                        'nim' => $nim,
                                        'angkatan' => $angkatan,
                                        'prodi' => $prodi,
                                    ]
                                );

                                $role = $localUser->role ?? 'mahasiswa';

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

                    return back()->withErrors(['login' => 'Username tidak ditemukan.']);
                }
            }

            // Fallback ke akun lokal
            $localUser = LocalUser::where('username', $username)->first();

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

            return back()->withErrors(['login' => 'Login gagal. Pastikan username dan password benar.']);
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
                return redirect('/admin')->with('success', 'Login berhasil!');
            case 'bendahara':
                return redirect('/admin/keuangan')->with('success', 'Login berhasil!');
            case 'mahasiswa':
            default:
                return redirect('/')->with('success', 'Login berhasil!');
        }
    }
}
