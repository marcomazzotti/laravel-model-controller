@extends('layouts.app')
@section('content')
    <div class="wrapper">
        <div class="container">
            <div class="row row-cols-5">
                @foreach ($movies as $movie)
                    <div class="col">
                        <div class="card my-5">
                            <img class="card-img-top" src="{{ $movie->image }}" alt="Card image cap">
                            <div class="card-body">
                                <h3 class="card-title">{{ $movie->title }}</h4>
                                    <h5 class="card-title mb-4">{{ $movie->original_title }}</h5>
                                    <p>Nationality: {{ $movie->nationality }}</p>
                                    <p>Release Date: {{ $movie->date }}</p>
                                    <p>Vote: {{ $movie->vote }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
