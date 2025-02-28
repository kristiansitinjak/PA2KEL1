@extends('admin.admin')

@section('content')
<div class="container mt-4">
    <h2 class="mb-3">Edit Anggota</h2>
    <a href="{{ route('admin.members.edit', $member->id) }}">Edit</a>
    <form action="{{ route('admin.members.destroy', $member->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Nama:</label>
        <input type="text" name="name" value="{{ $member->name }}" required>

        <label>Nama:</label>
        <input type="text" name="jabatan" value="{{ $member->jabatan }}" required>

        <label>Nomor Telepon:</label>
        <input type="text" name="phone" value="{{ $member->phone }}" required>

        <label>Email:</label>
        <input type="email" name="email" value="{{ $member->email }}" required>

        <label>Kategori:</label>
        <select name="category_id" required>
            @foreach($categories as $category)
                <option value="{{ $category->id }}" {{ $member->category_id == $category->id ? 'selected' : '' }}>
                    {{ $category->name }}
                </option>
            @endforeach
        </select>

        <label>Foto:</label>
        @if($member->photo)
            <img src="{{ asset('storage/' . $member->photo) }}" width="100">
        @endif
        <input type="file" name="photo" accept="image/*">

        <button type="submit">Update</button>
    </form>
</div>
@endsection
