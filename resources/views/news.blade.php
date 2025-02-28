@extends('layouts.app')

@section('content')
<div class="container-fluid bg-breadcrumb">
    <div class="container text-center py-5" style="max-width: 900px;">
        <h3 class="text-white display-3 mb-4">Latest News</h3>
        <p class="fs-5 text-white mb-4">Stay updated with our latest news and articles.</p>
        <ol class="breadcrumb justify-content-center mb-0">
            <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
            <li class="breadcrumb-item active text-white">News</li>
        </ol>    
    </div>
</div>

<div class="container py-5">
    <div class="row g-4">
        @foreach($news as $item)
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 shadow-sm">
                    <img src="{{ asset('storage/' . $item->image) }}" class="card-img-top" alt="{{ $item->title }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $item->title }}</h5>
                        <p class="card-text">{{ Str::limit($item->content, 100, '...') }}</p>
                        <a href="{{ route('news.show', $item->id) }}" class="btn btn-primary">Read More</a>
                    </div>
                    <div class="card-footer text-muted">
                        Published on {{ $item->created_at->format('d M Y') }}
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
