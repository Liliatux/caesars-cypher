<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Caesar @yield('title')</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.7/semantic.min.css">
    </head>
    <body>
        <h1>@yield('title')</h1>
        <div class="ui centered three columns grid">
            <div class="column">
            @yield('content')    
            </div>
        </div>
    </body>
</html>
