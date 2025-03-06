@extends('admin.admin')

@section('content')
    <h2>Edit Mahasiswa</h2>

    <form action="{{ route('admin.mahasiswa.update', $mahasiswa->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Nama:</label>
        <input type="text" name="nama" value="{{ $mahasiswa->nama }}" required>

        <label>NIM:</label>
        <input type="text" name="nim" value="{{ $mahasiswa->nim }}" required>

        <label>Kelas:</label>
        <input type="text" name="kelas" value="{{ $mahasiswa->kelas }}" required>

        <label>Angkatan:</label>
        <input type="text" name="angkatan" value="{{ $mahasiswa->angkatan }}" required>

        <button type="submit">Update</button>
    </form>
@endsection
