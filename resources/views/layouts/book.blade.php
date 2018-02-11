<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    @include('layouts.partials.head')
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,400" rel="stylesheet">
    <meta property="og:url" content="https://christoph-rumpel.com/talks"/>
    <meta property="og:type" content="article"/>
    <meta property="og:title" content="Hi I'm Christoph, I am talking about chatbots, Laravel and PHP"/>
    <meta property="og:description"
          content="I see a lot of benefits in being able to talk about coding and projects in front of other people. Your audience can learn from your experiences and you get to meet lots of different people from all around the world. Additionally you will learn a lot while preparing your talks."/>
    <meta property="og:image" content="{{ asset('/images/blog/cr_talking.jpg') }}"/>

    <meta name="twitter:card" content="summary"/>
    <meta name="twitter:site" content="@christophrumpel"/>
    <meta name="twitter:title" content="Hi I'm Christoph, I am talking about chatbots, Laravel and PHP"/>
    <meta name="twitter:description"
          content="I see a lot of benefits in being able to talk about coding and projects in front of other people. Your audience can learn from your experiences and you get to meet lots of different people from all around the world. Additionally you will learn a lot while preparing your talks."/>
    <meta name="twitter:image" content="{{ asset('/images/blog/cr_talking_square.jpg') }}"/>
</head>
<body class="font-sans">

@yield('content')

@if(app()->environment('production'))
    @include('layouts.partials.analytics')
@endif
</body>
</html>
