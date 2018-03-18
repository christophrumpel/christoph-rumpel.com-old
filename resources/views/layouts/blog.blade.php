<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    @include('layouts.partials.head')
    @include('layouts.partials.fonts-blog')
    @yield('meta')
</head>
<body class="font-sans">

<div class="flex flex-row justify-center w-screen">
    <div class="bg-cover relative overflow-hidden w-100 sm:h-full flex-col flex flex-row m-8">
        <header class="flex justify-between items-center mt-8 mb-12">
            @include('partials.logo')
            @include('partials.nav')
        </header>
        @yield('content')
        @include('partials.signup')
        @include('partials.footer')
    </div>
</div>

@include('layouts.partials.analytics')
</body>
</html>
