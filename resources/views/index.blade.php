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
    <div class="container">
        <div class="row">
            @foreach ($movies as $movie)
                <div class="col-4">
                    <div class="card">
                        <div class="card-title">
                            {{$movie['title']}}
                        </div>
                        <div class="card-body">
                            <div class="card-text">
                                Data: {{$movie['date']}}
                            </div>
                            <div class="card-text">
                                Voto: {{$movie['vote']}}
                            </div>
                        </div>
                    </div>
                </div>    
            @endforeach
        </div>
    </div>

</body>

</html>