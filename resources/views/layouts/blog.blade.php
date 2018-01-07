<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    @include('layouts.partials.head')
    @yield('meta')
</head>
<body class="font-sans">

<div class="flex flex-row justify-center w-screen">
    <div class="bg-cover relative overflow-hidden w-100 sm:h-full flex-col flex flex-row ml-8 mr-8">
        <header class="flex justify-between items-center mt-8 mb-12">
            @include('partials.logo')
            @include('partials.nav')
        </header>
        @yield('content')
    </div>
</div>

@if(app()->environment('production'))
    @include('layouts.partials.analytics')
@endif
</body>
</html>
