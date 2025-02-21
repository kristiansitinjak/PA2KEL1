@extends('admin.admin')

@section('content')
<div class="container">
    <h1>Tambah Laporan Keuangan</h1>

    <!-- Formulir untuk menambah laporan keuangan -->
    <form action="{{ route('keuangan.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>Jenis</label>
            <select name="jenis" class="form-control" required>
                <option value="pemasukan">Pemasukan</option>
                <option value="pengeluaran">Pengeluaran</option>
            </select>
        </div>
        <div class="mb-3">
            <label>Jumlah</label>
            <input type="number" name="jumlah" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Deskripsi</label>
            <textarea name="deskripsi" class="form-control"></textarea>
        </div>
        <div class="mb-3">
            <label>Tanggal</label>
            <input type="date" name="tanggal" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
    </form>
</div>
@endsection
