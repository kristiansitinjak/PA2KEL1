@extends('admin.admin')

@section('content')
    <div class="container">
        <h1>News List</h1>
        <a href="{{ route('news.create') }}" class="btn btn-primary">Add News</a>
        <table class="table mt-3">
            <tr>
                <th>Title</th>
                <th>Description</th>
                <th>Image</th>
                <th>Action</th>
            </tr>
            @foreach($news as $item)
                <tr>
                    <td>{{ $item->title }}</td>
                    <td>{{ Str::limit($item->description, 50) }}</td>
                    <td>
                        @if($item->image)
                            <img src="{{ asset('storage/' . $item->image) }}" width="100">
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('news.show', $item->id) }}" class="btn btn-info">View</a>
                        <a href="{{ route('news.edit', $item->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('news.destroy', $item->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" onclick="return confirm('Delete this news?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
