@extends('admin2.layout')

@section('content')
    <h1>Proposal Ditolak</h1>
    <table>
        <tr>
            <th>Judul</th>
            <th>Status</th>
        </tr>
        @foreach ($proposals as $proposal)
            <tr>
                <td>{{ $proposal->title }}</td>
                <td>{{ $proposal->status }}</td>
            </tr>
        @endforeach
    </table>
@endsection
