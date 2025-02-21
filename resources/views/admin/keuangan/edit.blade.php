@extends('admin.admin')

@section('content')
<div class="container">
    <h1>Edit Laporan Keuangan</h1>

    <!-- <form action="{{ route('laporan-keuangan.update', $laporan_keuangan->id) }}" method="POST"> -->
        @csrf @method('PUT')
        <div class="mb-3">
            <label>Jenis</label>
            <select name="jenis" class="form-control">
                <option value="pemasukan" {{ $laporan_keuangan->jenis == 'pemasukan' ? 'selected' : '' }}>Pemasukan</option>
                <option value="pengeluaran" {{ $laporan_keuangan->jenis == 'pengeluaran' ? 'selected' : '' }}>Pengeluaran</option>
            </select>
        </div>
        <div class="mb-3">
            <label>Jumlah</label>
            <input type="number" name="jumlah" class="form-control" value="{{ $laporan_keuangan->jumlah }}" required>
        </div>
        <div class="mb-3">
            <label>Deskripsi</label>
            <textarea name="deskripsi" class="form-control">{{ $laporan_keuangan->deskripsi }}</textarea>
        </div>
        <div class="mb-3">
            <label>Tanggal</label>
            <input type="date" name="tanggal" class="form-control" value="{{ $laporan_keuangan->tanggal }}" required>
        </div>
        <button type="submit" class="btn btn-success">Update</button>
    </form>
</div>
@endsection
