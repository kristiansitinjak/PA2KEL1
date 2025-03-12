@extends('admin.admin')

@section('content')
<div class="container">
    <h4>Transparansi Keuangan</h4>

    <a href="{{ route('admin.financial.create') }}" class="btn btn-primary mb-3">+ Tambah Data</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Tanggal</th>
                <th>Keterangan</th>
                <th>Jenis</th>
                <th>Jumlah</th>
            </tr>
        </thead>
        <tbody>
            @php
                $totalPemasukan = 0;
                $totalPengeluaran = 0;
            @endphp
            @foreach($records as $record)
                <tr>
                    <td>{{ $record->tanggal }}</td>
                    <td>{{ $record->keterangan }}</td>
                    <td>{{ $record->jenis }}</td>
                    <td>Rp {{ number_format($record->jumlah, 0, ',', '.') }}</td>
                </tr>

                @php
                    if($record->jenis == 'Pemasukan') $totalPemasukan += $record->jumlah;
                    else $totalPengeluaran += $record->jumlah;
                @endphp
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <th colspan="3">Total Pemasukan</th>
                <th>Rp {{ number_format($totalPemasukan, 0, ',', '.') }}</th>
            </tr>
            <tr>
                <th colspan="3">Total Pengeluaran</th>
                <th>Rp {{ number_format($totalPengeluaran, 0, ',', '.') }}</th>
            </tr>
            <tr>
                <th colspan="3">Saldo Akhir</th>
                <th>Rp {{ number_format($totalPemasukan - $totalPengeluaran, 0, ',', '.') }}</th>
            </tr>
        </tfoot>
    </table>
</div>
@endsection
