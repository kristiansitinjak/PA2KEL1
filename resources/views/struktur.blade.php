@extends('layouts.app')

@section('content')
<div class="container text-center">
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

{{-- Link ke file CSS eksternal --}}
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
@endsection
