@extends('admin.admin')

@section('content')
<h4 class="mb-4">Tambah Program Kerja</h4>

<form action="{{ route('programkerja.store') }}" method="POST">
    @csrf
    @include('admin.programkerja.form')
    <button type="submit" class="btn btn-primary">Simpan</button>
</form>
@endsection
