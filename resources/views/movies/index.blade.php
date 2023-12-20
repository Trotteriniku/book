@extends('layouts.app')
@section('title', 'All Movies')

@section('content')

    <ul>
        @foreach ($movies as $movie)
            <a href="{{ route('movies.show', $movie->id) }}">
                <li>{{ $movie->original_title }}</li>

            </a>
        @endforeach
    </ul>


@endsection
