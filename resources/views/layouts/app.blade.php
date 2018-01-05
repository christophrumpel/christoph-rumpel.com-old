<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, viewport-fit=cover">
    <meta name="description"
          content="{{ $meta_description ?? 'I\'m a web developer from Austria.' }}">
    <meta name="author" content="Christoph Rumpel">
    @if(isset($canonical_url) && $canonical_url)
        <link rel="canonical" href="{{ $canonical_url }}">
    @endif

    <title>{{ isset($title) ? ($title . ' — Christoph Rumpel') : 'Christoph Rumpel' }}</title>

    @include('feed::links')

    @include('layouts.partials.favicons')

    <link rel="preconnect" href="https://fonts.gstatic.com/">

    <link href="https://fonts.googleapis.com/css?family=Amaranth:700|Lora|Montserrat:700" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ mix('css/main.css') }}">

    <script defer src="{{ mix('js/app.js') }}"></script>

    @stack('head')
</head>
<body class="font-sans">

<div class="flex w-screen sm:h-screen relative flex-col sm:flex-row">
    <div class="relative overflow-hidden w-full sm:w-1/2 flex justify-center">
        <div class="sm:profile-column flex items-end p-8 justify-center h-full w-full bg-grey-darkest bg-center text-white">
            <div class="text-center sm:pb-8">
                <img class="sm:hidden" src="images/logo_cr2018_white.svg" width="50">
                <h1 class="mb-4 hidden sm:block text-sh text-shadow">christoph rumpel</h1>
                <p class="text-green text-xl hidden sm:block text-shadow">web developer</p>
            </div>
        </div>
    </div>
    <div class="bg-cover relative overflow-hidden w-full sm:w-1/2 sm:h-full flex-col flex flex-row">
        @include('partials.nav')
        {{ $slot }}
    </div>
</div>

@if(app()->environment('production'))
    @include('layouts.partials.analytics')
@endif
</body>
</html>
