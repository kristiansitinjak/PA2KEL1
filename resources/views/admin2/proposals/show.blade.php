@extends('admin2.layout')

@section('content')
<h2>Detail Proposal</h2>

<p><strong>Judul:</strong> {{ $proposal->title }}</p>
<p><strong>Status:</strong> {{ $proposal->status }}</p>
<p><strong>Dokumen:</strong> <a href="{{ asset('storage/' . $proposal->document_path) }}" target="_blank">Lihat</a></p>

@if($proposal->status == 'Pending Approval')
<form action="{{ route('admin2.proposals.approve', $proposal->proposal_id) }}" method="POST">
    @csrf
    <button type="submit" name="status" value="approved" class="btn btn-success">Setujui</button>
    <button type="submit" name="status" value="rejected" class="btn btn-danger">Tolak</button>
</form>
@endif
@endsection
