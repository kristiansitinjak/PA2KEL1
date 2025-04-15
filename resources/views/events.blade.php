@extends('layouts.app')

@section('title', 'Events')

@section('content')
<div class="container py-5">

    {{-- JUDUL HALAMAN --}}
    <div class="text-center mb-5">
        <h5 class="text-uppercase text-primary">Program Kerja</h5>
        <h1 class="mb-0">Daftar Kegiatan Himatif</h1>
    </div>

    {{-- BAGIAN 1: PROGRAM KERJA --}}
    @forelse ($programkerjas as $index => $item)
        <div class="table-responsive mb-5">
            <table class="table table-bordered">
                <tr>
                    <td style="width: 40px;" class="text-center align-middle"><strong>{{ $index + 1 }}.</strong></td>
                    <th style="width: 250px;">Kegiatan</th>
                    <td>{{ $item->kegiatan }}</td>
                </tr>
                <tr><td></td><th>Deskripsi</th><td>{{ $item->deskripsi }}</td></tr>
                <tr><td></td><th>Tujuan</th><td>{!! nl2br(e($item->tujuan)) !!}</td></tr>
                <tr><td></td><th>Tahap Pelaksanaan</th><td>{!! nl2br(e($item->tahap_pelaksanaan)) !!}</td></tr>
                <tr><td></td><th>Waktu Pelaksanaan</th><td>{{ \Carbon\Carbon::parse($item->waktu_pelaksanaan)->translatedFormat('F Y') }}</td></tr>
                <tr><td></td><th>Tempat</th><td>{{ $item->tempat }}</td></tr>
                <tr><td></td><th>Indikator</th><td>{{ $item->indikator }}</td></tr>
                <tr><td></td><th>Kekuatan</th><td>{{ $item->kekuatan }}</td></tr>
                <tr><td></td><th>Kelemahan</th><td>{{ $item->kelemahan }}</td></tr>
                <tr>
                    <td></td>
                    <th>Perkiraan Biaya</th>
                    <td>
                        @if ($item->perkiraan_biaya)
                            Rp {{ number_format($item->perkiraan_biaya, 0, ',', '.') }}
                        @else
                            -
                        @endif
                    </td>
                </tr>
                <tr><td></td><th>Sumber Dana / Biaya</th><td>{{ $item->sumber_dana }}</td></tr>
                <tr>
                    <td></td>
                    <th>Terlaksana</th>
                    <td>
                        <input type="checkbox" disabled {{ $item->terlaksana ? 'checked' : '' }}>
                    </td>
                </tr>
            </table>
        </div>
    @empty
        <p class="text-center">Belum ada program kerja.</p>
    @endforelse


    {{-- BAGIAN 2: EVENT --}}
    <div class="text-center my-5">
        <h5 class="text-uppercase text-primary">Event</h5>
        <h2 class="mb-0">Kegiatan yang Terlaksana</h2>
    </div>

    @if($events->count())
        <div class="row">
            @foreach($events as $event)
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm">
                        @if($event->photo)
                            <img src="{{ asset('storage/' . $event->photo) }}" class="card-img-top" alt="{{ $event->judul }}">
                        @endif
                        <div class="card-body">
                            <h5 class="card-title">{{ $event->judul }}</h5>
                            <p class="card-text">{{ \Illuminate\Support\Str::limit($event->deskripsi, 100) }}</p>
                            <p class="card-text"><strong>Tanggal:</strong> {{ \Carbon\Carbon::parse($event->tanggal)->translatedFormat('d F Y') }}</p>
                            <p class="card-text"><strong>Lokasi:</strong> {{ $event->lokasi }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @else
        <p class="text-center">Belum ada event yang terlaksana.</p>
    @endif

</div>
@endsection
