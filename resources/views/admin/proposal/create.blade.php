@extends('admin.admin')

@section('content')
<div class="container mt-4">
    <h2 class="mb-4">Buat Proposal</h2>

    {{-- Notifikasi jika ada error --}}
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {{-- Form Proposal --}}
    <form action="{{ route('admin.proposal.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        {{-- Perihal --}}
        <div class="form-group mb-3">
            <label for="perihal">Perihal (dari Proker)</label>
            <select name="perihal" id="perihal" class="form-control">
                <option value="">-- Pilih Perihal dari Proker --</option>
                @foreach ($proker as $item)
                    <option value="{{ $item->kegiatan }}">{{ $item->kegiatan }}</option>
                @endforeach
            </select>
        </div>

        {{-- Perihal manual --}}
        <div class="form-group mb-3">
            <label for="perihal_manual">Atau tulis perihal manual</label>
            <input type="text" name="perihal_manual" class="form-control" placeholder="Contoh: Proposal Kegiatan Lain">
        </div>

        {{-- Deskripsi --}}
        <div class="form-group mb-3">
            <label for="deskripsi">Deskripsi</label>
            <textarea name="deskripsi" rows="4" class="form-control" required></textarea>
        </div>

        {{-- Upload File --}}
        <div class="form-group mb-4">
            <label for="file">Upload File Proposal (PDF / DOC / DOCX)</label>
            <input type="file" name="file" class="form-control" required>
        </div>

        {{-- Tombol Kirim --}}
        <button type="submit" class="btn btn-primary">Kirim Proposal</button>
    </form>
</div>
@endsection
