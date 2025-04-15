@extends('admin.admin')

@section('content')
<h4 class="mb-4">Daftar Program Kerja</h4>

<a href="{{ route('programkerja.create') }}" class="btn btn-primary mb-3">Tambah Program Kerja</a>

@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

<table class="table table-bordered">
    <thead>
        <tr>
            <th>Kegiatan</th>
            <th>Waktu</th>
            <th>Tempat</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($programkerjas as $item)
        <tr>
            <td>{{ $item->kegiatan }}</td>
            <td>{{ \Carbon\Carbon::parse($item->waktu_pelaksanaan)->format('d M Y') }}</td>
            <td>{{ $item->tempat }}</td>
            <td>
                <a href="{{ route('programkerja.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>
                <form action="{{ route('programkerja.destroy', $item->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus?')">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
