@extends('layouts.app')

@section('content')
    <h1>Edit Movie</h1>
    <form action="{{ route('movies.update', $movie->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="movie_name">Movie Name</label>
            <input type="text" name="movie_name" id="movie_name" class="form-control" value="{{ $movie->movie_name }}">
        </div>
        <div class="form-group">
            <label for="movie_description">Movie Description</label>
            <textarea name="movie_description" id="movie_description" class="form-control">{{ $movie->movie_description }}</textarea>
        </div>
        <div class="form-group">
            <label for="movie_gener">Movie Genre</label>
            <input type="text" name="movie_gener" id="movie_gener" class="form-control" value="{{ $movie->movie_gener }}">
        </div>
        <button type="submit" class="btn btn-success">Update Movie</button>
    </form>
@endsection
