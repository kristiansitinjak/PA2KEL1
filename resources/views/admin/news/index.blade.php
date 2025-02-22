@extends('admin.admin')

@section('content')
<div class="container">
    <h1 class="mb-4">Daftar Berita</h1>
    
    <a href="{{ route('admin.news.create') }}" class="btn btn-primary mb-3">Tambah Berita</a>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>Gambar</th>
            <th>Judul</th>
            <th>Konten</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($news as $item)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>
                    @if($item->image)
                        <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->title }}" width="100">
                    @endif
                </td>
                <td>{{ $item->title }}</td>
                <td>{{ Str::limit($item->content, 50) }}</td>
                <td>
                    <a href="{{ route('admin.news.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('admin.news.destroy', $item->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Hapus berita ini?')">Hapus</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

</div>
@endsection
