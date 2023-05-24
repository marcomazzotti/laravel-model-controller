<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>

    <main>
        <div class="container">
            <div class="row row-cols-5">
                @foreach ($movies as $movie)
                    <div class="col">
                        <div class="card">
                            <img class="card-img-top" src="{{ $movie->image }}" alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title">{{ $movie->title }}</h4>
                                <h6 class="card-title">{{ $movie->original_title }}</h6>
                                <p>Nationality: {{ $movie->nationality }}</p>
                                <p>Release Date: {{ $movie->date }}</p>
                                <p>Vote: {{ $movie->vote }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </main>

</body>

</html>
