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
        @foreach($comics as $comic)
        <div class="card_fumetto col-12 col-md-6 col-lg-2 text-white my-5">
            <a href="/">
                <img src="{{ $comic->thumb }}" alt="">
                <div class="title_card mb-1">
                    {{ $comic->series }}
                </div>
            </a>
        </div>
        @endforeach 
    </div>
  </div>


</body>

</html>