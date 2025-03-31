@extends('admin.admin')

@section('content')
<div class="container mt-4">
    <h2 class="mb-3">Edit Anggota</h2>
    <a href="{{ route('admin.members.index') }}" class="btn btn-secondary mb-3">Kembali</a>

    <form action="{{ route('admin.members.update', $member->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label">Nama:</label>
            <input type="text" name="name" value="{{ $member->name }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Jabatan:</label>
            <input type="text" name="jabatan" value="{{ $member->jabatan }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Nomor Telepon:</label>
            <input type="text" name="phone" value="{{ $member->phone }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Email:</label>
            <input type="email" name="email" value="{{ $member->email }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Kategori:</label>
            <select name="category_id" class="form-select" required>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}" {{ $member->category_id == $category->id ? 'selected' : '' }}>
                        {{ ucfirst($category->name) }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">Foto:</label><br>
            @if($member->photo)
                <img src="{{ asset('storage/' . $member->photo) }}" class="img-thumbnail mb-2" width="100">
            @endif
            <input type="file" name="photo" class="form-control" accept="image/*">
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
