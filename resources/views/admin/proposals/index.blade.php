@extends('admin.admin')

@section('content')
<h2>Daftar Proposal Saya</h2>
<a href="{{ route('admin.proposals.create') }}" class="btn btn-primary">Tambah Proposal</a>

<table class="table">
    <thead>
        <tr>
            <th>Judul</th>
            <th>Status</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($proposals as $proposal)
        <tr>
            <td>{{ $proposal->title }}</td>
            <td>{{ $proposal->status }}</td>
            <td>
                <a href="{{ route('admin.proposals.show', $proposal->proposal_id) }}" class="btn btn-info">Detail</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
