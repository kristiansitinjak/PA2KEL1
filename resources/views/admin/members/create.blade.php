@extends('admin.admin')

@section('content')
<div class="container mt-4">
    <h2 class="mb-3">Tambah Anggota</h2>
    <a href="{{ route('admin.members.index') }}" class="btn btn-secondary mb-3">Kembali</a>

    <form action="{{ route('admin.members.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        {{-- Nama (Hanya huruf dan spasi) --}}
        <div class="mb-3">
            <label class="form-label">Nama:</label>
            <input type="text" name="name" class="form-control" required 
                   pattern="^[a-zA-Z\s]+$" title="Hanya boleh huruf dan spasi" value="{{ old('name') }}">
            @error('name') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        {{-- Jabatan (Hanya huruf dan spasi) --}}
        <div class="mb-3">
            <label class="form-label">Jabatan:</label>
            <input type="text" name="jabatan" class="form-control" required 
                   pattern="^[a-zA-Z\s]+$" title="Hanya boleh huruf dan spasi" value="{{ old('jabatan') }}">
            @error('jabatan') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        {{-- Nomor Telepon (Hanya angka, 10-13 digit) --}}
        <div class="mb-3">
            <label class="form-label">Nomor Telepon:</label>
            <input type="text" name="phone" class="form-control" required 
                   pattern="^\d{10,13}$" title="Harus angka 10-13 digit" value="{{ old('phone') }}">
            @error('phone') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        {{-- Email (Harus format email valid) --}}
        <div class="mb-3">
            <label class="form-label">Email:</label>
            <input type="email" name="email" class="form-control" required value="{{ old('email') }}">
            @error('email') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        {{-- Kategori (Harus dipilih) --}}
        <div class="mb-3">
            <label class="form-label">Kategori:</label>
            <select name="category_id" class="form-control" required>
                <option value="" disabled selected>Pilih Kategori</option>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>
                        {{ ucfirst($category->name) }}
                    </option>
                @endforeach
            </select>
            @error('category_id') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        {{-- Foto (Harus gambar jpg/png/jpeg, max 2MB) --}}
        <div class="mb-3">
            <label class="form-label">Foto:</label>
            <input type="file" name="photo" class="form-control" accept="image/*">
            @error('photo') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection
