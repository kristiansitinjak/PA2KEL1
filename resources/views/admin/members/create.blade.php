@extends('admin.admin')

@section('content')
<div class="container mt-4">
    <h2 class="mb-3">Tambah Anggota</h2>
    <a href="{{ route('admin.members.index') }}" class="btn btn-secondary mb-3">Kembali</a>

    <form action="{{ route('admin.members.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label class="form-label">Nama:</label>
            <input type="text" name="name" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Jabatan:</label>
            <input type="text" name="jabatan" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Nomor Telepon:</label>
            <input type="text" name="phone" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Email:</label>
            <input type="email" name="email" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Kategori:</label>
            <select name="category_id" class="form-control" required>
                <option value="" disabled selected>Pilih Kategori</option>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ ucfirst($category->name) }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">Foto:</label>
            <input type="file" name="photo" class="form-control" accept="image/*">
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>

</div>
@endsection



