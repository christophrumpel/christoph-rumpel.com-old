<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    @include('layouts.partials.head')
</head>
<body class="font-sans">

<div class="flex w-screen sm:h-screen relative flex-col sm:flex-row">
    <div class="relative overflow-hidden w-full sm:w-1/2 flex justify-center">
        <div class="sm:profile-column flex items-end p-8 justify-center h-full w-full bg-grey-darkest bg-center text-white">
            <div class="text-center sm:pb-8">
                <img class="sm:hidden" src="images/logo_cr2018_white.svg" width="50">
                <h1 class="mb-4 hidden sm:block text-sh text-shadow text-white">christoph rumpel</h1>
                <p class="text-green text-xl hidden sm:block text-shadow">web developer</p>
            </div>
        </div>
    </div>
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