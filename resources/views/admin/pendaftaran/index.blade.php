@extends('layouts.app')

@section('title', 'Daftar Pendaftar')

@section('content')
<div class="container py-5">

    <h1 class="mb-4">Daftar Pendaftar Event</h1>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="table-responsive">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>NIM</th>
                    <th>Angkatan</th>
                    <th>Email</th>
                    <th>Event</th>
                    <th>Hadir</th>
                    <th>Update</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pendaftars as $pendaftar)
                    <tr>
                        <td>{{ $pendaftar->nama }}</td>
                        <td>{{ $pendaftar->nim }}</td>
                        <td>{{ $pendaftar->angkatan }}</td>
                        <td>{{ $pendaftar->email }}</td>
                        <td>{{ $pendaftar->event->judul }}</td>
                        <td>
                            <form action="{{ route('admin.pendaftaran.updateHadir', $pendaftar->id) }}" method="POST">
                                @csrf
                                <input type="checkbox" name="hadir" onchange="this.form.submit()" {{ $pendaftar->hadir ? 'checked' : '' }}>
                            </form>
                        </td>
                        <td>
                            @if($pendaftar->hadir)
                                <span class="badge bg-success">Hadir</span>
                            @else
                                <span class="badge bg-secondary">Belum Hadir</span>
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</div>
@endsection
