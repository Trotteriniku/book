@extends('layouts.app')
@section('title', 'All Books')

@section('content')
    <div class="container">
        <div class="row row-cols-4 justify-content-center  align-items-center gap-3  text-center  "
            style="height:100vh; width:calc(100% - 1rem);">

            @foreach ($books as $book)
                <div class="w-25 text-light text-decoration-none  rounded-2 p-3 shadow_card"
                    style="background-color: #222222">
                    <img src="{{ $book->cover_image }}" alt="" class="w-100">
                    <h3>{{ $book->title }}</h3>
                </div>
            @endforeach

        </div>
    </div>




@endsection
