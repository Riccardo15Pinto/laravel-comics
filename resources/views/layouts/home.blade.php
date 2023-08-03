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
    <?php $comics = config('comics'); ?>
    <?php $voices = config('voices'); ?>
    <?php $buys = config('buys'); ?>
    <?php $socials = config('socials'); ?>

    @include('includes.header')
    @include('includes.jumbotron')
    @include('includes.main')
    @include('includes.footer')

</body>

</html>
