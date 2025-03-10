@extends('admin.admin')

@section('content')
<div class="container mt-4">
    <h2>Manajemen Mahasiswa</h2>
    <a href="{{ route('admin.mahasiswa.create') }}" class="btn btn-primary mb-3">Tambah Mahasiswa</a>

    <!-- ✅ Perbaikan pada form: gunakan method PATCH -->
    <form action="{{ route('admin.mahasiswa.updateStatus') }}" method="POST">
        @csrf
        @method('PATCH') <!-- ✅ Menyesuaikan metode dengan route di web.php -->
        
        <table class="table">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>NIM</th>
                    <th>Kelas</th> <!-- ✅ Tambah Kelas -->
                    <th>Angkatan</th> <!-- ✅ Tambah Angkatan -->
                    <th>Status Pembayaran</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($mahasiswas as $mahasiswa)
                <tr>
                    <td>{{ $mahasiswa->nama }}</td>
                    <td>{{ $mahasiswa->nim }}</td>
                    <td>{{ $mahasiswa->kelas }}</td> <!-- ✅ Menampilkan Kelas -->
                    <td>{{ $mahasiswa->angkatan }}</td> <!-- ✅ Menampilkan Angkatan -->
                    <td>
                        <input type="checkbox" name="status_pembayaran[{{ $mahasiswa->id }}]" value="1"
                        {{ $mahasiswa->status_pembayaran ? 'checked' : '' }}>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <button type="submit" class="btn btn-success mt-3">Update Status</button>
    </form>
</div>
@endsection
