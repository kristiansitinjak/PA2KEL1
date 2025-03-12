@extends('admin.admin')

@section('content')
<div class="container">
    <h4>Data Status Pembayaran Mahasiswa</h4>

    <table class="table table-bordered">
        <thead>
            <tr>
                @foreach($values[0] as $header)
                    <th>{{ $header }}</th>
                @endforeach
            </tr>
        </thead>
        <tbody>
            @foreach($values as $key => $row)
                @if($key === 0) @continue @endif
                <tr>
                    @foreach($row as $cell)
                        <td>{{ $cell }}</td>
                    @endforeach
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
