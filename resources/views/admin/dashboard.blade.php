@extends('admin.admin')
@section('title', 'Dashboard')

@section('content')

<div class="text-center mt-5">

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if(session('user'))
        <p>Selamat datang, <strong>{{ session('user')['username'] }}</strong>!</p>
        {{-- <p>Email: {{ session('user')['email'] }}</p>
        <p>Program Studi: {{ session('user')['prodi'] }}</p> --}}
    @else
        <p>Data user tidak ditemukan. Silakan login kembali.</p>
    @endif
{{-- 
    <!-- Tombol logout yang membuka modal -->
    <button type="button" class="btn btn-danger mt-3" data-toggle="modal" data-target="#logoutModal">
        Logout
    </button>

    <a href="{{ url('/') }}" class="d-block mt-3 text-primary">Kembali ke Halaman Utama</a>
</div> --}}

@endsection
