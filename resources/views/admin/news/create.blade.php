@extends('admin.admin') 

@section('content')
<link rel="stylesheet" href="{{ asset('css/sidebar.css') }}">
<div class="container mt-4">
    <div class="card shadow-lg p-4">
        <h2 class="mb-3">Create News</h2>
        
        <div class="card p-3">
            <h4>Detail Berita</h4>
            <div class="mb-3">
                <label class="form-label">Judul Berita</label>
                <input type="text" class="form-control" placeholder="Judul berita..">
            </div>

            <div class="row">
                <div class="col-md-6">
                    <label class="form-label">Start Time</label>
                    <input type="time" class="form-control">
                </div>
                <div class="col-md-6">
                    <label class="form-label">Start Date</label>
                    <input type="date" class="form-control">
                </div>
            </div>

            <div class="mb-3">
                <label class="form-label">Deskripsi</label>
                <textarea class="form-control" rows="4" placeholder="Deskripsi"></textarea>
            </div>

            <div class="mb-3">
                <label class="form-label">Upload Photos</label>
                <input type="file" class="form-control">
            </div>

            <button type="submit" class="btn btn-success w-100">Submit</button>
        </div>
    </div>
</div>
@endsection
