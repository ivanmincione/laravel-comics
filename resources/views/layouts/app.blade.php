<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield("page-title","Laravel DC Comics")</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:wght@300;700&family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">

        {{-- STYLE --}}
        <link rel="stylesheet" href="{{ asset("css/app.css") }}">

    </head>
    <body>
        @include("partials.header")
        @yield("content")
        @include("partials.footer")
    </body>
</html>
