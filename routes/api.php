<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;
use App\Models\User;

Route::post('/login', function (Request $request) {
    $request->validate([
        'nim' => 'required|string',
        'password' => 'required|string',
    ]);

    // Request ke API kampus
    $response = Http::post('https://cis.del.ac.id/api/auth/login', [
        'nim' => $request->nim,
        'password' => $request->password,
    ]);

    if ($response->failed()) {
        return response()->json(['message' => 'Login gagal, periksa kembali NIM dan password.'], 401);
    }

    $data = $response->json();

    // Simpan atau update user dalam database
    $user = User::updateOrCreate(
        ['nim' => $data['nim']],
        [
            'name' => $data['name'],
            'email' => $data['email'],
        ]
    );

    // Generate token Sanctum
    $token = $user->createToken('auth_token')->plainTextToken;

    return response()->json([
        'message' => 'Login berhasil',
        'token' => $token,
        'user' => $user,
    ]);

    
    Route::middleware(['refresh.api.token'])->group(function () {
        Route::post('/login', [AuthController::class, 'login']);
    });
    
});
