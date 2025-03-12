@extends('admin.admin')

@section('content')
<div class="container">
    <h4>Tambah Data Keuangan</h4>
    <form action="{{ route('admin.financial.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label>Tanggal</label>
            <input type="date" name="tanggal" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Keterangan</label>
            <input type="text" name="keterangan" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Jenis</label>
            <select name="jenis" class="form-control" required>
                <option value="Pemasukan">Pemasukan</option>
                <option value="Pengeluaran">Pengeluaran</option>
            </select>
        </div>
        <div class="form-group">
            <label>Jumlah</label>
            <input type="number" name="jumlah" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success mt-2">Simpan</button>
    </form>
</div>
@endsection
