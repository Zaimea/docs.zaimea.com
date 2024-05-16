<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    @php
        $newTitle = empty($title) ? config('site.title') : "{$title} | " . config('site.title');
    @endphp

    <title>{{ $newTitle }}</title>

    <meta name="description" content="{{ $attributes->get('description') ?? config('site.description') }}">

    <meta property="og:site_name" content="{{ config('site.title') }}" />
    <meta property="og:title" content="{{ $newTitle }}" />
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

<body {{ $attributes->except(['title', 'description']) }}>

    <div class="flex flex-col min-h-screen dark:bg-gray-900">
        {{ $slot }}

        {{ $footer ?? '' }}

        <footer class="py-4 text-sm text-center text-gray-700 dark:text-gray-200 bg-gray-100 dark:bg-gray-800" role="contentinfo">
            <ul class="flex flex-col justify-center my-0 list-none md:flex-row">
                <li class="md:mr-2">
                    &copy; {{ date('Y') }} Zaimea. All rights reserved.
                </li>
            </ul>
        </footer>
    </div>

    @stack('scripts')

</body>

</html>
