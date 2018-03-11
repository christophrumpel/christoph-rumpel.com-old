@extends('layouts.home')

@section('meta')
    <meta property="og:url"                content="https://christoph-rumpel.com" />
    <meta property="og:type"               content="article" />
    <meta property="og:title"              content="Hi I'm Christoph, a web developer from Austria" />
    <meta property="og:description"        content="This is my personal blog where I write about PHP, Laravel, Git and Chatbots. I also talk about these topics. Checkout my site to find out more." />
    <meta property="og:image"              content="{{ asset('/images/cr_image_v3.jpg') }}" />

    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="@christophrumpel" />
    <meta name="twitter:title" content="Hi I'm Christoph, a web developer from Austria" />
    <meta name="twitter:description" content="This is my personal blog where I write about PHP, Laravel, Git and Chatbots. I also talk about these topics. Checkout my site to find out more." />
    <meta name="twitter:image" content="{{ asset('/images/cr_image_v3.jpg') }}" />
@endsection

@section('content')

    @include('partials.blog-list', ['posts' => $posts])

    <!-- Render pagination -->
    {{ $posts->render() }}

@endsection
