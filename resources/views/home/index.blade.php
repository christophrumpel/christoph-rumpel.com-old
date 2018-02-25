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

    <ul class="flex flex-col p-0 mt-0 mb-0 sm:justify-center w-full white flex-grow">
        @foreach($posts as $post)
            <li class="mb-4 w-full list-reset">
                <time class="mb-0 text-grey-darkest font-bold uppercase text-sm font-sans tracking-wide">{{ $post->dateShort }} |
                    <span
                            class="text-orange">{{ $post->category }}</span>
                </time>

                @if($post->external_url)
                    <a class="no-underline" href="{{ $post->external_url }}">
                        <h2 class="mt-0 mb-2 text-grey-darkest text-lg lg:text-xl">{{ $post->title }} 🔗</h2>
                    </a>
                    <a class="text-blue-light text-sm" href="{{ $post->external_url }}">Read more</a>
                @else
                    <a class="no-underline" href="{{ $post->url }}">
                        <h2 class="mt-0 mb-2 text-grey-darkest text-lg lg:text-xl">{{ $post->title }}</h2>
                    </a>
                    <p class="blogsummary hidden  text-base md:block">{!! $post->summary_short !!}</p>
                    <a class="text-blue-light text-sm" href="{{ $post->url }}">Read more</a>
                @endif
            </li>
        @endforeach
    </ul>

    {{ $posts->render() }}

@endsection
