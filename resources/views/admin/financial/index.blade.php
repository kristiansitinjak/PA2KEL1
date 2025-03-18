@extends('admin.admin')

@section('content')
<div class="container">
    <h4 class="mb-4">Transparansi Keuangan</h4>

    <a href="{{ route('admin.financial.create') }}" class="btn btn-primary mb-4">+ Tambah Data</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="row">
        <div class="col-md-6">
            <div class="card p-3 mb-4">
                <h5 class="mb-3">Rincian Pemasukan</h5>
                <table class="table table-bordered table-striped">
                    <thead class="thead-dark">
                        <tr>
                            <th>Tanggal</th>
                            <th>Keterangan</th>
                            <th>Jumlah</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $totalPemasukan = 0; @endphp
                        @foreach($records->where('jenis', 'Pemasukan') as $record)
                            <tr>
                                <td>{{ $record->tanggal }}</td>
                                <td>{{ $record->keterangan }}</td>
                                <td>Rp {{ number_format($record->jumlah, 0, ',', '.') }}</td>
                            </tr>
                            @php $totalPemasukan += $record->jumlah; @endphp
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th colspan="2">Total Pemasukan</th>
                            <th>Rp {{ number_format($totalPemasukan, 0, ',', '.') }}</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card p-3 mb-4">
                <h5 class="mb-3">Rincian Pengeluaran</h5>
                <table class="table table-bordered table-striped">
                    <thead class="thead-dark">
                        <tr>
                            <th>Tanggal</th>
                            <th>Keterangan</th>
                            <th>Jumlah</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $totalPengeluaran = 0; @endphp
                        @foreach($records->where('jenis', 'Pengeluaran') as $record)
                            <tr>
                                <td>{{ $record->tanggal }}</td>
                                <td>{{ $record->keterangan }}</td>
                                <td>Rp {{ number_format($record->jumlah, 0, ',', '.') }}</td>
                            </tr>
                            @php $totalPengeluaran += $record->jumlah; @endphp
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th colspan="2">Total Pengeluaran</th>
                            <th>Rp {{ number_format($totalPengeluaran, 0, ',', '.') }}</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>

        <div class="col-md-12">
            <div class="card p-3 mb-4">
                <h5 class="mb-3">Saldo Akhir</h5>
                <div class="alert alert-info">
                    <strong>Saldo Akhir:</strong> Rp {{ number_format($totalPemasukan - $totalPengeluaran, 0, ',', '.') }}
                </div>
            </div>
        </div>

        <div class="col-md-12">
            <div class="card p-3 mb-4">
                <h5 class="mb-3">Grafik Keuangan</h5>
                <canvas id="financialChart"></canvas>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    const ctx = document.getElementById('financialChart').getContext('2d');
    const financialChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Pemasukan', 'Pengeluaran', 'Saldo Akhir'],
            datasets: [{
                label: 'Jumlah (Rp)',
                data: [{{ $totalPemasukan }}, {{ $totalPengeluaran }}, {{ $totalPemasukan - $totalPengeluaran }}],
                backgroundColor: [
                    'rgba(54, 162, 235, 0.7)',
                    'rgba(255, 99, 132, 0.7)',
                    'rgba(75, 192, 192, 0.7)'
                ],
                borderColor: [
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 99, 132, 1)',
                    'rgba(75, 192, 192, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true,
                    ticks: {
                        callback: function(value) {
                            return 'Rp ' + value.toLocaleString('id-ID');
                        }
                    }
                }
            }
        }
    });
</script>
@endsection