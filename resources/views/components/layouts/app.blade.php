<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="{{ $metaDescription ?? 'Default meta-description' }}">

        <title>Doulos Dev - {{ $title ?? ''}}</title>

        <script src="https://cdn.tailwindcss.com"></script>

    </head>

    <body class="antialiased container mx-auto">
        <x-layouts.navegation />

        {{ $slot }}

    </body>
</html>
