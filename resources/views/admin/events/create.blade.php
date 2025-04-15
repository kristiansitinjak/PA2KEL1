@extends('admin.admin')

@section('content')
<div class="container mt-4">
    <h1>Tambah Event</h1>

    <form action="{{ route('events.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label for="program_kerja_id" class="form-label">Nama Program Kerja</label>
            <select name="program_kerja_id" id="program_kerja_id" class="form-control" required>
                <option value="">-- Pilih Program Kerja --</option>
                @foreach ($programKerjaList as $proker)
                    <option value="{{ $proker->kegiatan }}">{{ $proker->kegiatan }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="deskripsi" class="form-label">Deskripsi</label>
            <textarea name="deskripsi" id="deskripsi" rows="4" class="form-control" required></textarea>
        </div>

        <div class="mb-3">
            <label for="tanggal" class="form-label">Tanggal</label>
            <input type="date" name="tanggal" id="tanggal" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="lokasi" class="form-label">Lokasi</label>
            <input type="text" name="lokasi" id="lokasi" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="photo" class="form-label">Foto (opsional)</label>
            <input type="file" name="photo" id="photo" class="form-control">
        </div>

        <button class="btn btn-success">Simpan</button>
        <a href="{{ route('events.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
