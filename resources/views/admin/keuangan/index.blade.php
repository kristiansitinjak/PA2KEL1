@extends('admin.admin')

@section('content')
<div class="container">
    <h1>Laporan Keuangan</h1>
    <a href="{{ route('keuangan.create') }}" class="btn btn-primary">Tambah Laporan</a>

    @if (session('success'))
        <div class="alert alert-success mt-2">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered mt-3">
        <thead>
            <tr>
                <th>No</th>
                <th>Jenis</th>
                <th>Jumlah</th>
                <th>Deskripsi</th>
                <th>Tanggal</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($laporans as $laporan)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ ucfirst($laporan->jenis) }}</td>
                    <td>Rp {{ number_format($laporan->jumlah, 2, ',', '.') }}</td>
                    <td>{{ $laporan->deskripsi }}</td>
                    <td>{{ $laporan->tanggal }}</td>
                    <td>
                        <a href="{{ route('keuangan.edit', $laporan->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('keuangan.destroy', $laporan->id) }}" method="POST" style="display:inline;">
                            @csrf 
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $laporans->links() }}
</div>
@endsection
