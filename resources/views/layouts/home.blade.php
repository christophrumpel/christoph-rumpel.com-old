<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    @include('layouts.partials.head')
</head>
<body class="font-sans">

<div class="flex w-screen sm:h-screen relative flex-col sm:flex-row">
    <div class="relative overflow-hidden w-full sm:w-1/2 flex justify-center">
        <div class="hidden sm:profile-column sm:flex items-end p-8 justify-center h-full w-full bg-center text-white">
            <div class="text-center sm:pb-8">
                <h1 class="mb-2 hidden sm:block text-sh text-shadow text-white">christoph rumpel</h1>
                <p class="text-green text-xl hidden sm:block text-shadow">web developer</p>
            </div>
        </div>
    </div>
    <div class="bg-cover relative overflow-hidden w-full sm:w-1/2 sm:h-full flex-col flex flex-row p-8">
        <header class="flex justify-between items-center mt-4 sm:mt-8 mb-12">
            @include('partials.logo')
            @include('partials.nav')
        </header>
        @yield('content')
        @include('partials.footer')
    </div>
</div>

@if(app()->environment('production'))
    @include('layouts.partials.analytics')
@endif
</body>
</html>