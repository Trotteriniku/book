@extends('layouts.app')

@section('title, home')

@section('content')
    <main>
        <div class="container" style="margin: 0px auto;">
            <div class="row justify-content-center justify-content-evenly  text-center  row-cols-md-6 row-cols-12 ">
                <a href="{{ route('movies.index') }}" class="w-25 text-light text-decoration-none  rounded-2 p-5 shadow_card"
                    style="background-color: #222222">
                    <h3 class="deepshadow">Movies</h3>
                </a>


                <a href="{{ route('books.index') }}" class="w-25 text-light rounded-2 text-decoration-none p-5 shadow_card"
                    style="background-color: #222222">
                    <h3 class="deepshadow">Books</h3>
                </a>

            </div>
        </div>
    </main>

@endsection('content')
