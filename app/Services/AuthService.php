<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class AuthService
{
    protected $apiUrl;

    public function __construct()
    {
        $this->apiUrl = env('https://cis-dev.del.ac.id/api');
    }

    public function login($email, $password)
    {
        $response = Http::post("{$this->apiUrl}/login", [
            'username' => $email,
            'password' => $password,
        ]);

        return $response->json();
    }
}
