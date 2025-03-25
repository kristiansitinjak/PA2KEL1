@extends('admin.admin')

@section('content')
<div class="container">
    <h4 class="mb-4">Transparansi Keuangan</h4>

    <a href="{{ route('admin.financial.create') }}" class="btn btn-primary mb-4">+ Tambah Data</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="row">
        <!-- Tabel Pemasukan -->
        <div class="col-md-6">
            <div class="card p-4 shadow-sm">
                <h5 class="mb-3">Rincian Pemasukan</h5>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped text-center">
                        <thead class="bg-primary text-white">
                            <tr>
                                <th>Tanggal</th>
                                <th>Keterangan</th>
                                <th>Jumlah</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $totalPemasukan = 0; @endphp
                            @foreach($records->where('jenis', 'Pemasukan') as $record)
                                <tr>
                                    <td>{{ $record->tanggal }}</td>
                                    <td>{{ $record->keterangan }}</td>
                                    <td>Rp {{ number_format($record->jumlah, 0, ',', '.') }}</td>
                                    <td>
                                        <a href="{{ route('admin.financial.edit', $record->id) }}" class="btn btn-warning btn-sm">
                                            <i class="fa fa-pencil-alt"></i>
                                        </a>
                                        <form action="{{ route('admin.financial.destroy', $record->id) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus data ini?')">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                @php $totalPemasukan += $record->jumlah; @endphp
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr class="bg-light">
                                <th colspan="2">Total Pemasukan</th>
                                <th>Rp {{ number_format($totalPemasukan, 0, ',', '.') }}</th>
                                <th></th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>

        <!-- Tabel Pengeluaran -->
        <div class="col-md-6">
            <div class="card p-4 shadow-sm">
                <h5 class="mb-3">Rincian Pengeluaran</h5>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped text-center">
                        <thead class="bg-danger text-white">
                            <tr>
                                <th>Tanggal</th>
                                <th>Keterangan</th>
                                <th>Jumlah</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $totalPengeluaran = 0; @endphp
                            @foreach($records->where('jenis', 'Pengeluaran') as $record)
                                <tr>
                                    <td>{{ $record->tanggal }}</td>
                                    <td>{{ $record->keterangan }}</td>
                                    <td>Rp {{ number_format($record->jumlah, 0, ',', '.') }}</td>
                                    <td>
                                        <button class="btn btn-info btn-sm">
                                            <i class="fa fa-eye"></i>
                                        </button>
                                        <a href="{{ route('admin.financial.edit', $record->id) }}" class="btn btn-warning btn-sm">
                                            <i class="fa fa-pencil-alt"></i>
                                        </a>
                                        <form action="{{ route('admin.financial.destroy', $record->id) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus data ini?')">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                @php $totalPengeluaran += $record->jumlah; @endphp
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr class="bg-light">
                                <th colspan="2">Total Pengeluaran</th>
                                <th>Rp {{ number_format($totalPengeluaran, 0, ',', '.') }}</th>
                                <th></th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Saldo Akhir -->
    <div class="col-md-12 mt-4">
        <div class="card p-4 shadow-sm text-center">
            <h5>Saldo Akhir</h5>
            <div class="alert alert-info">
                <strong>Rp {{ number_format($totalPemasukan - $totalPengeluaran, 0, ',', '.') }}</strong>
            </div>
        </div>
    </div>
</div>
@endsection