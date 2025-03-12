@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="text-center mb-5">Transparansi Keuangan</h2>

    <div class="card shadow mb-4">
        <div class="card-body">
            <table class="table table-hover table-bordered">
                <thead class="thead-dark text-center">
                    <tr>
                        <th>Tanggal</th>
                        <th>Keterangan</th>
                        <th>Jenis</th>
                        <th>Jumlah (Rp)</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($records as $record)
                    <tr class="text-center">
                        <td>{{ \Carbon\Carbon::parse($record->tanggal)->format('d-m-Y') }}</td>
                        <td>{{ $record->keterangan }}</td>
                        <td>
                            <span class="badge {{ strtolower($record->jenis) == 'pemasukan' ? 'bg-success' : 'bg-danger' }}">
                                {{ ucfirst($record->jenis) }}
                            </span>
                        </td>
                        <td class="text-end">Rp {{ number_format($record->jumlah, 0, ',', '.') }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-md-4">
            <div class="card border-success mb-3">
                <div class="card-body text-success">
                    <h5 class="card-title">Total Pemasukan</h5>
                    <h4>Rp {{ number_format($totalPemasukan, 0, ',', '.') }}</h4>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card border-danger mb-3">
                <div class="card-body text-danger">
                    <h5 class="card-title">Total Pengeluaran</h5>
                    <h4>Rp {{ number_format($totalPengeluaran, 0, ',', '.') }}</h4>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card border-primary mb-3">
                <div class="card-body text-primary">
                    <h5 class="card-title">Sisa Saldo Saat Ini</h5>
                    <h4>Rp {{ number_format($saldoAkhir, 0, ',', '.') }}</h4>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
