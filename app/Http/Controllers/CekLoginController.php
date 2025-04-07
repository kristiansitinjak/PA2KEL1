<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CekLoginController extends Controller
{
    public function index()
    {
        return view('auth.login'); // atau 'login' kalau file-nya di views root
    }
}
