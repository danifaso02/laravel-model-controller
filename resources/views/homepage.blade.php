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
            <h1>Movies</h1>
            <div class="row g-3">
                @foreach ($movies as $movie)
                    <div class="col-3">
                        <div class="card">
                            <div class="card-body">
                              <h5 class="card-title">{{ $movie->title }}</h5>
                              <h6 class="card-subtitle mb-2 text-muted">{{ $movie->original_title }}</h6>
                              <p class="card-text">{{ $movie->date }}</p>
                              <p><strong>Voto:</strong>{{ $movie->vote }}</p>
                              <a href="#" class="card-link">Card link</a>
                            </div>
                          </div>
                    </div> 
                @endforeach
                
            </div>

        </div>
    </main>

</body>

</html>
