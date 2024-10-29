<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @yield("additional-meta")
    @yield("additional-cdn")
    <title>@yield("page-title", "")</title>
</head>
<body>

    {{-- Inserici Header --}}
    @include("partials.header")

    <main>
        @yield("main-content")
    </main>

    {{-- Inserisci Footer --}}
    @include("partials.footer")

    @vite("resources/js/app.js")
    @yield("additional-scripts")
</body>
</html>
