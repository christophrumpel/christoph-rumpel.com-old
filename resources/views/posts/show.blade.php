@extends('layouts.blog')

@section('meta')
    <meta property="og:url"                content="{{$post->url}}" />
    <meta property="og:type"               content="article" />
    <meta property="og:title"              content="{{ $post->title }}" />
    <meta property="og:description"        content="{{ $post->summary }}" />
    <meta property="og:image"              content="{{ $post->preview_image }} />
@endsection

@section('content')
    <article class="mt-8 mb-8">
        <time class="mb-2 text-grey-darkest font-bold uppercase text-med">{{ $post->dateShort }} | <span
                    class="text-orange">{{ $post->category }}</span>
        </time>
        <h1 class="mt-2 mb-8 text-grey-darkest text-4xl">{{ $post->title }}</h1>

        <header class="font-sans leading-normal font-sans text-xl text-grey-darkest font-bold mb-8">
            {!!  $post->summary !!}
        </header>
        {!! $post->contents !!}

    </article>

    {{--<article class="post">--}}
    {{--<header class="post__header">--}}
    {{--<div class="container">--}}
    {{--<div class="post__header__logotype">--}}
    {{--<a href="{{ url('/') }}" class="logotype"></a>--}}
    {{--</div>--}}
    {{--<h1 class="post__header__title">--}}
    {{--{{ $post->title }}--}}
    {{--</h1>--}}
    {{--@if($post->date)--}}
    {{--<aside class="post__header__meta">--}}
    {{--@if($post->original_publication_url && $post->original_publication_name)--}}
    {{--Originally published on <time datetime="{{ $post->date->format('Y-m-d') }}">{{ $post->date->format('F jS, Y') }}</time> by Sebastian De Deyne--}}
    {{--on <a href="{{ $post->original_publication_url }}" class="post__header__meta__link">{{ $post->original_publication_name }}</a>--}}
    {{--@else--}}
    {{--Published on <time datetime="{{ $post->date->format('Y-m-d') }}">{{ $post->date->format('F jS, Y') }}</time> by Sebastian De Deyne--}}
    {{--@endif--}}
    {{--@if($post->subtitle)--}}
    {{--— {{ $post->subtitle }}--}}
    {{--@endif--}}
    {{--</aside>--}}
    {{--@endif--}}
    {{--</div>--}}
    {{--</header>--}}
    {{--<section class="post__body">--}}
    {{--<div class="container">--}}
    {{--<div class="post-contents">--}}
    {{--{!! $post->contents !!}--}}
    {{--</div>--}}
    {{--@if($post->read_more_text)--}}
    {{--<a href="{{ $post->read_more_url }}" target="sebdd" class="post__body__readmore">--}}
    {{--{{ $post->read_more_text }}--}}
    {{--</a>--}}
    {{--@endif--}}
    {{--</div>--}}
    {{--</section>--}}
    {{--<footer class="post__footer">--}}
    {{--<div class="container container--narrow">--}}
    {{--<p class="post__footer__p">--}}
    {{--© {{ carbon()->format('Y') }}--}}
    {{--<a class="post__footer__link -subtle" href="{{ route('about') }}">Sebastian De Deyne</a>--}}
    {{--</p>--}}
    {{--<p class="post__footer__p">--}}
    {{--If you've got any comments, feedback or just want to chat you can get in touch on <a class="post__footer__link" href="https://twitter.com/sebdedeyne" target="sebdd">Twitter</a> or via <a class="post__footer__link" href="mailto:sebastiandedeyne@gmail.com">e-mail</a>. If you catch a mistake or notice something that could be improved, feel free to <a class="post__footer__link" target="sebdd" href="https://github.com/sebastiandedeyne/sebastiandedeyne.com/edit/{{ config('app.branch') }}/content/posts/{{ $post->date->format('Y-m-d') }}.{{ $post->slug }}.md">edit this post on GitHub</a>.--}}
    {{--</p>--}}
    {{--</div>--}}
    {{--</footer>--}}
    {{--</article>--}}
@endsection
