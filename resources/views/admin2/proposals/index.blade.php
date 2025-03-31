@extends('admin2.layout')

@section('content')
<h2>Daftar Proposal yang Menunggu Persetujuan</h2>

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
                <a href="{{ route('admin2.proposals.show', $proposal->proposal_id) }}" class="btn btn-info">Periksa</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
