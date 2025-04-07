<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Exception;

class CampusAuthService
{
    protected $apiUrl;
    protected $loginEndpoint;

    public function __construct()
    {
        // Gunakan konfigurasi dari config/services.php
        $this->apiUrl = config('services.campus_api.base_url', 'https://cis.del.ac.id/api');
        $this->loginEndpoint = config('services.campus_api.login_endpoint', '/login');
    }

    public function authenticate($nim, $password)
    {
        try {
            $response = Http::post("{$this->apiUrl}/login", [
                'nim' => $nim,
                'password' => $password,
            ]);
    
            // Debugging: Cek status HTTP dan body response
            if ($response->failed()) {
                return [
                    'success' => false,
                    'message' => 'Gagal menghubungi server kampus',
                    'status_code' => $response->status(),
                    'error' => $response->body() // Lihat isi error dari API
                ];
            }
    
            return $response->json();
    
        } catch (\Exception $e) {
            return [
                'success' => false,
                'message' => 'Terjadi kesalahan saat menghubungi API',
                'error' => $e->getMessage() // Lihat error PHP jika ada
            ];
        }
    }
}    