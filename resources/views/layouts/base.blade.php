<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>LaraChat</title>
    @vite(['resources/sass/app.scss',
        'resources/css/app.css',
        'resources/js/app.js'])

</head>
<body class="antialiased">
<div class="bg-slate-950 p-5 text-white min-h-screen">

    @section('menu')
{{--        @include('layouts.menu')--}}
    @show

    @section('content')
    @show


</div>
</body>
</html>
