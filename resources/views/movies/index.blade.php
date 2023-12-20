@extends('layouts.app')
@section('title', 'All Movies')

@section('content')

    <div class="container">
        <div class="row row-cols-5 justify-content-center  align-items-center gap-3  text-center  ">

            @foreach ($movies as $movie)
                <div class="card" style=" background-color:#222222;">
                    <img class="card-img-top" src="{{ $movie->image }}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title text-light">{{ $movie->title }}</h5>

                    </div>
                </div>
            @endforeach

        </div>
    </div>

@endsection
