@extends('admin.admin')

@section('content')
<div class="container">
    <h1 class="mb-4">Edit Berita</h1>

    <form action="{{ route('admin.news.update', $news->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label class="form-label">Judul Berita</label>
            <input type="text" name="title" class="form-control" value="{{ $news->title }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Konten</label>
            <textarea name="content" class="form-control" rows="4" required>{{ $news->content }}</textarea>
        </div>

        <button type="submit" class="btn btn-success">Perbarui Berita</button>
    </form>
</div>
@endsection
