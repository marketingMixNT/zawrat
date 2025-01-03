@props(['title', 'description', 'noFollow' => false])

<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('partials.meta')
    @include('partials.fonts')
    @include('partials.favicon')

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <x-preloader />
    <x-header.header />
    <x-header.header-secondary />
    <x-header.mobile-menu />

    {{ $slot }}

    <x-mobile-buttons />

</body>

</html>