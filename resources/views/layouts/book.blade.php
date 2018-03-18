<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    @include('layouts.partials.head-book')
    @include('layouts.partials.fonts-book')
    @include('layouts.partials.meta-book')
</head>
<body class="font-sans">

@yield('content')

@include('layouts.partials.analytics')
<script>
    window.fbAsyncInit = function() {
        FB.init({
            appId            : '1961726034144563',
            autoLogAppEvents : true,
            xfbml            : true,
            version          : 'v2.12'
        });
    };

    (function(d, s, id){
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) {return;}
        js = d.createElement(s); js.id = id;
        js.src = "https://connect.facebook.net/en_US/sdk.js";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>

</body>
</html>
