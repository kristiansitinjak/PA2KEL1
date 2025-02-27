@extends('layouts.app')

@section('content')
<div class="container text-center">
    <h1 class="mb-5">Struktur Organisasi {{ $category->name }}</h1>

    @if ($category->members->count() > 0)
        <div class="org-chart">
            @foreach ($category->members as $member)
                <div class="member-card">
                    <img src="{{ asset('storage/' . $member->photo) }}" alt="{{ $member->name }}" class="member-photo">
                    <h5 class="mt-2 fw-bold">{{ $member->name }}</h5>
                    <p class="text-muted">{{ $member->position }}</p>
                    <p>📧 {{ $member->email }}</p>
                    <p>📞 {{ $member->phone }}</p>
                </div>
            @endforeach
        </div>
    @else
        <p class="text-muted">Belum ada anggota di kategori ini.</p>
    @endif
</div>
@endsection
