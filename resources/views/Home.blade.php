<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies Data</title>
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
</head>
<body>

    <div class="container">
        <div class="title">
            <h1>I MIGLIORI FILM MARVEL:</h1>
        </div>
        <div class="allineamento">
            @foreach($allMovies as $movie)
            
                <div class="film-card">
                    <div class="box-image">
                        <img src="{{ $movie['cover'] }}" alt="Copertina film {{ $movie['title'] }}">  
                    </div>
                    <div class="titolo">
                        {{ $movie['title'] }}
                    </div>
                </div>
            
        
            @endforeach

        </div>

    </div>

</body>
</html>