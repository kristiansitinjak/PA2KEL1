@extends('admin.admin')

@section('content')
<div class="container mt-4">
    <h2 class="mb-3">Manajemen Anggota</h2>
    <a href="{{ route('admin.members.create') }}" class="btn btn-primary mb-3">+ Tambah Anggota</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="table-responsive">
        <table class="table table-striped table-hover">
            <thead class="thead-dark">
                <tr>
                    <th>Nama</th>
                    <th>Telepon</th>
                    <th>Email</th>
                    <th>Kategori</th>
                    <th>Foto</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($members as $member)
                <tr>
                    <td>{{ $member->name }}</td>
                    <td>{{ $member->phone }}</td>
                    <td>{{ $member->email }}</td>
                    <td>{{ $member->category->name }}</td>
                    <td>
                        @if($member->photo)
                            <img src="{{ asset('storage/' . $member->photo) }}" class="img-thumbnail" width="70">
                        @else
                            <span class="text-muted">Tidak ada foto</span>
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('admin.members.edit', $member->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('admin.members.destroy', $member->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus anggota ini?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </form>



                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
