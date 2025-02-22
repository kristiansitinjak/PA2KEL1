@extends('layouts.app')

@section('content')
<div class="container mx-auto mt-10 p-6">
    <h2 class="text-3xl font-bold text-center mb-8">Struktur Organisasi</h2>

    <div class="flex flex-col items-center">
        @foreach($members as $member)
            @if($member->position == 'Direktur')
                <div class="text-center p-6 bg-blue-500 text-white rounded-lg shadow-lg w-72">
                    <h3 class="text-lg font-bold">{{ $member->position }}</h3>
                    <p>Nama: {{ $member->name }}</p>
                    <p>Telp: {{ $member->phone }}</p>
                    <p>Email: {{ $member->email }}</p>
                </div>
            @endif
        @endforeach

        <div class="flex justify-center space-x-10 mt-6">
            @foreach($members as $member)
                @if(in_array($member->position, ['Project Manager', 'Wakil Project Manager']))
                    <div class="text-center p-6 bg-green-500 text-white rounded-lg shadow-lg w-64">
                        <h3 class="text-lg font-bold">{{ $member->position }}</h3>
                        <p>Nama: {{ $member->name }}</p>
                        <p>Telp: {{ $member->phone }}</p>
                        <p>Email: {{ $member->email }}</p>
                    </div>
                @endif
            @endforeach
        </div>

        <div class="flex justify-center space-x-6 mt-6">
            @foreach($members as $member)
                @if(str_contains($member->position, 'Ketua Divisi'))
                    <div class="text-center p-6 bg-yellow-500 text-white rounded-lg shadow-lg w-64">
                        <h3 class="text-lg font-bold">{{ $member->position }}</h3>
                        <p>Nama: {{ $member->name }}</p>
                        <p>Telp: {{ $member->phone }}</p>
                        <p>Email: {{ $member->email }}</p>
                    </div>
                @endif
            @endforeach
        </div>
    </div>
</div>
@endsection
