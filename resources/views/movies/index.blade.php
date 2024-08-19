@extends('layouts.app')

@section('content')
    <h1>Movies List</h1>
    <a href="{{ route('movies.create') }}" class="btn btn-primary">Add New Movie</a>
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Description</th>
                <th>Genre</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($movies as $movie)
                <tr>
                    <td>{{ $movie->movie_name }}</td>
                    <td>{{ $movie->movie_description }}</td>
                    <td>{{ $movie->movie_gener }}</td>
                    <td>
                        <a href="{{ route('movies.show', $movie->id) }}" class="btn btn-info">View</a>
                        <a href="{{ route('movies.edit', $movie->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('movies.destroy', $movie->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
