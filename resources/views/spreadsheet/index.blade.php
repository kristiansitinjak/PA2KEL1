@extends('layouts.app')

@section('title', 'events')

@section('content')
<!DOCTYPE html>
<html>
<head>
    <title>Data Spreadsheet</title>
    <style>
        table { border-collapse: collapse; width: 70%; }
        th, td { border: 1px solid #999; padding: 8px; text-align: left; }
    </style>
</head>
<body>
    <h2>Data dari Google Spreadsheet</h2>

    <table>
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
</body>
</html>
@endsection