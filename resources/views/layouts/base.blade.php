<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>{{ $title = empty($title) ? config('site.title') : "{$title} | ".config('site.title') }}</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="{{ $attributes->get('description') ?? config('site.description') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta property="og:site_name" content="{{ config('site.title') }}" />
    <meta property="og:title" content="{{ $title }}" />
    <meta property="og:description" content="{{ $description ?? config('site.description') }}" />
    <meta property="og:url" content="{{ url()->current() }}" />
    <meta property="og:image" content="https://docs.zaimea.com/assets/img/logo.png" />
    <meta property="og:type" content="website" />

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:creator" content="@custura">
    <meta name="twitter:image:alt" content="zaimea work scheduler">

    <link rel="icon" href="/favicon.ico">

    {{ $head ?? '' }}

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @stack('styles')

</head>

<body {{ $attributes->except(['title', 'description']) }} class="bg-black dark:bg-black">

{{ $slot }}

{{ $footer ?? '' }}

@stack('scripts')

</body>
</html>
