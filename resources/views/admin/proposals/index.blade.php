@extends('admin.admin')

@section('content')
    <div class="container">
        <h2>Daftar Proposal</h2>

        {{-- Menampilkan pesan sukses jika ada --}}
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        {{-- Menampilkan daftar proposal --}}
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Judul</th>
                    <th>Status</th>
                    <th>File</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($proposals as $proposal)
                    <tr>
                        <td>{{ $proposal->title }}</td>
                        <td>
                            @if($proposal->status == 'pending')
                                <span class="badge bg-warning">Pending</span>
                            @elseif($proposal->status == 'approved')
                                <span class="badge bg-success">Approved</span>
                            @else
                                <span class="badge bg-danger">Rejected</span>
                            @endif
                        </td>
                        <td>
                            {{-- Link untuk mengunduh proposal --}}
                            <a href="{{ route('admin.proposals.download', $proposal) }}" class="btn btn-sm btn-success">Download</a>
                        </td>
                        <td>
                            @if($proposal->status == 'pending')
                                {{-- Tombol untuk menyetujui proposal --}}
                                <form action="{{ route('admin.proposals.approve', $proposal) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('PATCH')
                                    <button type="submit" class="btn btn-sm btn-primary">Approve</button>
                                </form>

                                {{-- Tombol untuk menolak proposal --}}
                                <form action="{{ route('admin.proposals.reject', $proposal) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('PATCH')
                                    <button type="submit" class="btn btn-sm btn-danger">Reject</button>
                                </form>
                            @else
                                {{-- Menampilkan tanda "-" jika status sudah bukan 'pending' --}}
                                -
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
