@extends('layouts.app')
@section('title', 'All Books')

@section('content')

    <ul>
        @foreach ($books as $book)
            <a href="{{ route('books.show', $book->id) }}">
                <li>{{ $book->title }}</li>

            </a>
        @endforeach
    </ul>


@endsection
