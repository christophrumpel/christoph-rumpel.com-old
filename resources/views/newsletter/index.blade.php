@extends('layouts.home')

@section('meta')
    <meta property="og:url"                content="https://christoph-rumpel.com/newsletter" />
    <meta property="og:type"               content="article" />
    <meta property="og:title"              content="Hi I'm Christoph, a web developer from Austria" />
    <meta property="og:description"        content="Let's stay in touch and let me tell you from time to time what I have been working on." />
    <meta property="og:image"              content="{{ asset('/images/cr_image_v3.jpg') }}" />

    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="@christophrumpel" />
    <meta name="twitter:title" content="Hi I'm Christoph, this is my newsletter" />
    <meta name="twitter:description" content="Let's stay in touch and let me tell you from time to time what I have been working on." />
    <meta name="twitter:image" content="{{ asset('/images/cr_image_v3.jpg') }}" />
@endsection

@section('content')
    @include('partials.signup')
@endsection