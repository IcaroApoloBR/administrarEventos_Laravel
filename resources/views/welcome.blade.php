<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel Curso</title>

        <link rel="stylesheet" href="/css/styles.css">
        <script src="/js/scripts.js"></script>

    </head>
    <body>
        <h1>Olá {{$nome}}, parabéns pelos {{$idade}} de idade.</h1>
        @for($i = 0; $i < count($arr); $i++)
            <p>{{$arr[$i]}} - {{ $i }}</p>
        @endfor
    </body>
</html>
