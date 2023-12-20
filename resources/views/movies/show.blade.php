@extends('layouts.app')
@section('title', 'movie_details')

@section('content')
    <h1>{{ $movie->original_title }}</h1>

@endsection
