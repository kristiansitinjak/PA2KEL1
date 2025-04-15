@extends('admin.admin')

@section('content')
<div class="container mt-4">
    <h1>Daftar Event</h1>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <a href="{{ route('events.create') }}" class="btn btn-primary mb-3">+ Tambah Event</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Judul</th>
                <th>Deskripsi</th>
                <th>Tanggal</th>
                <th>Lokasi</th>
                <th>Foto</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($events as $event)
            <tr>
                <td>{{ $event->judul }}</td>
                <td>{{ $event->deskripsi }}</td>
                <td>{{ \Carbon\Carbon::parse($event->tanggal)->translatedFormat('d F Y') }}</td>
                <td>{{ $event->lokasi }}</td>
                <td>
                    @if($event->photo)
                        <img src="{{ asset('storage/' . $event->photo) }}" width="100">
                    @else
                        -
                    @endif
                </td>
                <td>
                    <a href="{{ route('events.edit', $event->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('events.destroy', $event->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus event ini?')">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
