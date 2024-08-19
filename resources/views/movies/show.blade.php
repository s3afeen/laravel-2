@extends('layouts.app')

@section('content')
    <h1>{{ $movie->movie_name }}</h1>
    <p>{{ $movie->movie_description }}</p>
    <p><strong>Genre: </strong>{{ $movie->movie_gener }}</p>
    <a href="{{ route('movies.index') }}" class="btn btn-secondary">Back to List</a>
@endsection
