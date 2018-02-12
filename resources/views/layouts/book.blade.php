<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    @include('layouts.partials.head-book')
    @include('layouts.partials.fonts-book')
    @include('layouts.partials.meta-book')
</head>
<body class="font-sans">

@yield('content')

@if(app()->environment('production'))
    @include('layouts.partials.analytics')
@endif
</body>
</html>
