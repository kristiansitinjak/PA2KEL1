@extends('admin.admin')
@section('title', 'Dashboard')

@section('content')

<div class="container mt-5">

    {{-- Notifikasi sukses --}}
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Sukses!</strong> {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    {{-- Kartu ucapan selamat datang --}}
    <div class="card shadow-sm border-0 rounded-4">
        <div class="card-body text-center py-5">

            @if(session('user'))
                <h2 class="mb-3">Selamat datang, <span class="text-primary">{{ session('user')['username'] }}</span> 👋</h2>

                @if(session('user')['prodi'] ?? null)
                    <p class="text-muted">Program Studi: <strong>{{ session('user')['prodi'] }}</strong></p>
                @endif

                <a href="{{ url('/') }}" class="btn btn-outline-primary mt-4">
                    Kembali ke Halaman Utama
                </a>

                {{-- Logout dengan clear session manual --}}
                <a href="{{ url('/logout') }}" class="btn btn-danger mt-4 ms-2">
                    Logout
                </a>

            @else
                <h4 class="text-danger">Data user tidak ditemukan 😢</h4>
                <a href="{{ route('admin.login') }}" class="btn btn-primary mt-3">Login Ulang</a>
            @endif

        </div>
    </div>

</div>

@endsection
