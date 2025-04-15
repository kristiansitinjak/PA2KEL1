@extends('admin.admin')

@section('content')
<h1>Daftar Proposal</h1>
<table class="table">
    <thead>
        <tr>
            <th>Perihal</th>
            <th>Status</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($proposals as $proposal)
            <tr>
                <td>{{ $proposal->perihal }}</td>
                <td>{{ $proposal->status }}</td>
                <td>
                    <a href="{{ route('proposal.show', $proposal->id) }}" class="btn btn-info">Detail</a>

                    @if(Auth::user()->role === 'admin2' && $proposal->status === 'Menunggu Persetujuan')
                        <form action="{{ route('proposal.approve', $proposal->id) }}" method="POST" style="display:inline;">
                            @csrf
                            <button type="submit" class="btn btn-success">Setujui</button>
                        </form>
                        <form action="{{ route('proposal.reject', $proposal->id) }}" method="POST" style="display:inline;">
                            @csrf
                            <button type="submit" class="btn btn-danger">Tolak</button>
                        </form>
                    @endif
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
