<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <link rel="apple-touch-icon" sizes="180x180" href="/favicon_/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon_/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon_/favicon-16x16.png">
        <link rel="manifest" href="/favicon_/site.webmanifest">
        <link rel="mask-icon" href="/favicon_/safari-pinned-tab.svg" color="#5bbad5">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="theme-color" content="#ffffff">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? env('APP_NAME') }}</title>
        @livewireStyles
        @vite(['resources/js/app.js', 'resources/css/app.css'])
    </head>
    <body class="m-0 font-sans antialiased font-normal text-size-base leading-default bg-gray-50 text-slate-500 ">
        {{ $slot }}

        @livewireScriptConfig
    </body>
</html>
