<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="bootstrap5/css/bootstrap.min.css">
        <title>@yield('titulo da aba')</title>
    </head>

    <body>
        <h1>@yield('titulo')</h1>

        @yield('conteudo')
    </body>
</html>