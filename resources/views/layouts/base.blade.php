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
<div class="text-white min-h-screen bg-gradient-to-tr from-slate-950 to-slate-900">

<div class="flex">
        @section('menu')
            {{--        @include('layouts.menu')--}}
        @show
        <div class="flex-grow p-5">
            @section('content')
            @show
        </div>
</div>




</div>
</body>
</html>
