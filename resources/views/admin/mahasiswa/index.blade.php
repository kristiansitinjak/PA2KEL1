@extends('admin.admin')

@section('content')
    <h2>Manajemen Mahasiswa</h2>
    <a href="{{ route('admin.mahasiswa.create') }}">Tambah Mahasiswa</a>
    <table>
        <thead>
            <tr>
                <th>Nama</th>
                <th>NIM</th>
                <th>Kelas</th>
                <th>Angkatan</th>
                <th>Status Pembayaran</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($mahasiswas as $mahasiswa)
                <tr>
                    <td>{{ $mahasiswa->nama }}</td>
                    <td>{{ $mahasiswa->nim }}</td>
                    <td>{{ $mahasiswa->kelas }}</td>
                    <td>{{ $mahasiswa->angkatan }}</td>
                    <td>
                        <form action="{{ route('admin.mahasiswa.update', $mahasiswa->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <input type="checkbox" name="status_pembayaran" 
                                onchange="this.form.submit()" {{ $mahasiswa->status_pembayaran ? 'checked' : '' }}>
                        </form>
                    </td>
                    <td>
                        <a href="{{ route('admin.mahasiswa.edit', $mahasiswa->id) }}">Edit</a>
                        <form action="{{ route('admin.mahasiswa.destroy', $mahasiswa->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
