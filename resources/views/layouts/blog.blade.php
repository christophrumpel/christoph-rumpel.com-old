<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    @include('layouts.partials.head')
</head>
<body class="font-sans">

<div class="flex flex-row justify-center w-screen">
    <div class="bg-cover relative overflow-hidden w-full sm:w-1/2 sm:h-full flex-col flex flex-row">
        @include('partials.nav')
        @yield('content')
    </div>
</div>

@if(app()->environment('production'))
    @include('layouts.partials.analytics')
@endif
</body>
</html>
