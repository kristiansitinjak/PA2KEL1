@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ $news->title }}</h1>
    @if($news->image)
    <img src="{{ asset('storage/' . $news->image) }}" class="img-fluid mb-3" alt="News Image">
    @endif
    <p>{{ $news->content }}</p>
    <a href="{{ url('/news') }}" class="btn btn-secondary">Kembali ke Berita</a>

</div>
@endsection
