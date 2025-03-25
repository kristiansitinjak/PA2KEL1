@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="text-center mb-5">Transparansi Keuangan</h2>

    <table class="table table-bordered">
        <thead class="thead-dark">
            <tr>
                <th>Tanggal</th>
                <th>Keterangan</th>
                <th>Jenis</th>
                <th>Jumlah</th>
                <th>Detail</th>
            </tr>
        </thead>
        <tbody>
            @foreach($records as $record)
            <tr>
                <td>{{ \Carbon\Carbon::parse($record->tanggal)->format('d-m-Y') }}</td>
                <td>{{ $record->keterangan }}</td>
                <td>
                    <span class="badge {{ strtolower($record->jenis) == 'pemasukan' ? 'bg-success' : 'bg-danger' }}">
                        {{ ucfirst($record->jenis) }}
                    </span>
                </td>
                <td>Rp {{ number_format($record->jumlah, 0, ',', '.') }}</td>
                <td>
                    <button class="btn btn-primary btn-sm" data-bs-toggle="collapse" data-bs-target="#detail-{{ $record->id }}">
                        Lihat Detail
                    </button>
                </td>
            </tr>
            <tr id="detail-{{ $record->id }}" class="collapse">
                <td colspan="5">
                    <ul>
                        @foreach($record->details as $detail)
                        <li>{{ $detail->keterangan }} - Rp {{ number_format($detail->jumlah, 0, ',', '.') }}</li>
                        @endforeach
                    </ul>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
