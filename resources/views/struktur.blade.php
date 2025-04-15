@extends('layouts.app')

@section('content')
<style>
    .main-content {
        padding-top: 120px;
    }

    @media (max-width: 768px) {
        .main-content {
            padding-top: 100px;
        }
    }

    .pyramid-row {
        display: flex;
        justify-content: center;
        margin-bottom: 30px;
        gap: 20px;
        flex-wrap: wrap;
    }

    .member-card {
        background: white;
        border-radius: 15px;
        box-shadow: 0 0 10px rgba(0,0,0,0.1);
        padding: 20px;
        text-align: center;
        width: 250px;
        transition: transform 0.2s ease;
    }

    .member-card:hover {
        transform: scale(1.03);
    }

    .member-photo {
        width: 120px;
        height: 120px;
        border-radius: 50%;
        object-fit: cover;
        border: 3px solid #ccc;
    }
</style>

<div class="container text-center main-content">
    <h1 class="mb-5">Struktur Organisasi {{ $category->name }}</h1>

    @if ($category->members->count() > 0)
        @php
            $rows = [2, 3, 5, 7]; // Pola piramida (2,3,5,7)
            $index = 0;
            $totalMembers = $category->members->count();
            $members = $category->members;
        @endphp

        @foreach ($rows as $row)
            @if ($index >= $totalMembers) @break @endif
            <div class="pyramid-row">
                @for ($i = 0; $i < $row && $index < $totalMembers; $i++, $index++)
                    <div class="member-card">
                        <div class="card-body">
                            <img src="{{ asset('storage/' . $members[$index]->photo) }}" 
                                 alt="{{ $members[$index]->name }}" 
                                 class="member-photo">

                            <h5 class="fw-bold mt-3">{{ $members[$index]->name }}</h5>
                            <h4 class="text-primary fw-bold">{{ $members[$index]->jabatan }}</h4>

                            <p class="text-muted small">
                                <i class="fas fa-envelope"></i> {{ $members[$index]->email }} <br>
                                <i class="fas fa-phone"></i> {{ $members[$index]->phone }}
                            </p>
                        </div>
                    </div>
                @endfor
            </div>
        @endforeach
    @else
        <p class="text-muted">Belum ada anggota di kategori ini.</p>
    @endif
</div>
@endsection
