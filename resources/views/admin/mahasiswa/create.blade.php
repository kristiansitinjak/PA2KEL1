@extends('admin.admin')

@section('content')
    <h2>Tambah Mahasiswa</h2>

    <form action="{{ route('admin.mahasiswa.store') }}" method="POST">
        @csrf
        <label>Nama:</label>
        <input type="text" name="nama" required>

        <label>NIM:</label>
        <input type="text" name="nim" required>

        <label>Kelas:</label>
        <input type="text" name="kelas" required>

        <label>Angkatan:</label>
        <input type="text" name="angkatan" required>

        <button type="submit">Simpan</button>
    </form>
@endsection
