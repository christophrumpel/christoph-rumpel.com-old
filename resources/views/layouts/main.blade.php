<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title></title>
    <meta name="description"
          content="Hi, I am Christoph Rumpel and this is my personal blog where I share my Laravel, PHP anb business experiences.">
    <meta name="author" content="Christoph Rumpel">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Styles -->
    <link href="{{ asset('css/main.css') }}" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Bitter:ital,wght@0,400;0,700;1,400&display=swap"
          rel="stylesheet">
    @livewireStyles

    @isset($post)
        @include('partials.postMeta')
    @endisset

</head>

<body class="bg-bgBlue">
<div class="container mx-auto  max-w-5xl p-8 md:p-12">
    <header class="flex flex-col lg:flex-row items-center mb-8 lg:mb-16">
        @include('partials.logo')
        @include('partials.nav')
    </header>

    {{ $slot }}
</div>

@include('partials.footer')

@livewireScripts
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
</body>
</html>
