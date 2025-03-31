@extends('admin.admin')

@section('content')
<h2>Tambah Proposal</h2>

{{-- Menampilkan error jika ada --}}
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('admin.proposals.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    
    <div class="form-group">
        <label for="program_id">Program ID</label>
        <input type="number" name="program_id" class="form-control" value="{{ old('program_id') }}" required>
    </div>

    <div class="form-group">
        <label for="title">Judul Proposal</label>
        <input type="text" name="title" class="form-control" value="{{ old('title') }}" required>
    </div>

    <div class="form-group">
        <label for="document">Upload Dokumen</label>
        <input type="file" name="document" class="form-control" required>
    </div>

    <button type="submit" class="btn btn-primary mt-3">Kirim Proposal</button>
</form>
@endsection
