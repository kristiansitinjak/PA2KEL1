@extends('admin.admin')

@section('content')
<div class="container">
    <h1>Edit Proposal</h1>

    <form action="{{ route('admin.proposals.update', $proposal->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div>
            <label>Perihal:</label>
            <input type="text" name="perihal" value="{{ $proposal->perihal }}" required>
        </div>

        <div>
            <label>Deskripsi:</label>
            <textarea name="deskripsi" rows="5" required>{{ $proposal->deskripsi }}</textarea>
        </div>

        <div>
            <label>File Proposal Baru (opsional):</label>
            <input type="file" name="file">
        </div>

        <button type="submit">Update</button>
    </form>
</div>
@endsection
