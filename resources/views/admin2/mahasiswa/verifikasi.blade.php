@extends('admin2.layout.app')

@section('content')
<div class="container">
    <h2 class="mt-4">Verifikasi Mahasiswa</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered mt-3">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>NIM</th>
                <th>Kelas</th>
                <th>Angkatan</th>
                <th>Status Pembayaran</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($mahasiswas as $key => $mahasiswa)
            <tr>
                <td>{{ $key + 1 }}</td>
                <td>{{ $mahasiswa->nama }}</td>
                <td>{{ $mahasiswa->nim }}</td>
                <td>{{ $mahasiswa->kelas }}</td>
                <td>{{ $mahasiswa->angkatan }}</td>
                <td>
                    @if($mahasiswa->status_pembayaran)
                        <span class="badge badge-success">Sudah Bayar</span>
                    @else
                        <span class="badge badge-danger">Belum Bayar</span>
                    @endif
                </td>
                <td>
                    <form action="{{ route('admin2.mahasiswa.approve', $mahasiswa->id) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('PATCH')
                        <button type="submit" class="btn btn-success btn-sm">✔ Approve</button>
                    </form>

                    <form action="{{ route('admin2.mahasiswa.reject', $mahasiswa->id) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('PATCH')
                        <button type="submit" class="btn btn-danger btn-sm">❌ Reject</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="7" class="text-center">Tidak ada mahasiswa yang perlu diverifikasi.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
