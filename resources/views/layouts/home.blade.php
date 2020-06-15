<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title></title>
    <meta name="description"
          content="Hi, I am Christoph Rumpel and this is my personal blog where I share my Laravel, PHP anb business experiences.">
    <meta name="author" content="Christoph Rumpel">

    <!-- Styles -->
    <link href="{{ asset('css/main.css') }}" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Bitter:ital,wght@0,400;0,700;1,400&display=swap"
          rel="stylesheet">
    @livewireStyles

</head>

<body class="bg-bgBlue">
{{ $slot }}
<footer class="flex justify-center p-12">
    <div>
        &copy; Christoph Rumpel {{ date('Y') }}
    </div>
</footer>

@livewireScripts
</body>
</html>
