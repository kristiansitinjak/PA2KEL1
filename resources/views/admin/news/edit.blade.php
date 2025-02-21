@extends('admin.admin')

@section('content')
<div class="container">
    <h2 class="mb-4">Edit Berita</h2>

    <form action="{{ route('admin.news.update', $news->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="title" class="form-label">Judul</label>
            <input type="text" name="title" id="title" class="form-control" value="{{ $news->title }}" required>
        </div>

        <div class="mb-3">
            <label for="content" class="form-label">Konten</label>
            <textarea name="content" id="content" class="form-control" required>{{ $news->content }}</textarea>
        </div>

        <div class="mb-3">
            <label for="image" class="form-label">Gambar (Opsional)</label>
            <input type="file" name="image" id="image" class="form-control">
            @if($news->image)
                <img src="{{ asset('storage/' . $news->image) }}" width="100" class="mt-2">
            @endif
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
