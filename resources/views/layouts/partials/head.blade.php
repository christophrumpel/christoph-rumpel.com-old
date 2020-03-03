<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, viewport-fit=cover">
<meta name="description"
      content="Hi I am Christoph, a web developer and book author from Austria. I blog and talk about PHP, Laravel, chatbots, dotfiles, content security policy and more.">
<meta name="author" content="Christoph Rumpel">
@if(isset($canonical_url) && $canonical_url)
    <link rel="canonical" href="{{ $canonical_url }}">
@endif
@if(isset($post->title))
    <title>{{ $post->title }} - Christoph Rumpel</title>
@else
    <title>{{ isset($title) ? ($title . ' — Christoph Rumpel') : 'Christoph Rumpel - Blog, Talks and books' }}</title>
@endif

@include('feed::links')

@include('layouts.partials.favicons-blog')


<link rel="stylesheet" type="text/css" href="{{ mix('css/main.css') }}">

<script defer src="{{ mix('js/app.js') }}"></script>

@stack('head')
