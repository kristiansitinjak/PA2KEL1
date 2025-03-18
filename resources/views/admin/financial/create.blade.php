@extends('admin.admin')

@section('content')
<div class="card-form-wrapper">
<div class="container-fluid d-flex justify-content-center">
    <div class="card-form-wrapper w-100" style="max-width: 800px;">
        <div class="card-form bg-white p-4 shadow-sm rounded">
            <h4 class="mb-4 text-primary font-weight-bold">Tambah Data Keuangan</h4>
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
                <button type="submit" class="btn btn-success mt-3">Simpan</button>
            </form>
        </div>
    </div>
</div>
@endsection
