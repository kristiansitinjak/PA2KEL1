@extends('admin.admin')

@section('content')
<h4 class="mb-4">Edit Program Kerja</h4>

<form action="{{ route('programkerja.update', $programkerja->id) }}" method="POST">
    @csrf
    @method('PUT')
    @include('admin.programkerja.form', ['programkerja' => $programkerja])
    <button type="submit" class="btn btn-success">Update</button>
</form>
@endsection
