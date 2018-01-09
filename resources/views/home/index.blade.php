@extends('layouts.home')

@section('meta')
    <meta property="og:url"                content="https://christoph-rumpel.com" />
    <meta property="og:type"               content="article" />
    <meta property="og:title"              content="Hi I'm Christph, a web developer from Austria" />
    <meta property="og:description"        content="This is my personal blog where I write about PHP, Laravel, Git and Chatbots. I also talk about these topics." />
    <meta property="og:image"              content="{{ asset('/images/cr_image.jpg') }}" />
@endsection

@section('content')

    <ul class="flex flex-col p-0 mt-0 mb-0 sm:justify-center w-full white flex-grow">
        @foreach($posts as $post)
            <li class="mb-4 w-full list-reset">
                <time class="mb-0 text-grey-darkest font-bold uppercase text-sm font-sans">{{ $post->dateShort }} |
                    <span
                            class="text-orange">{{ $post->category }}</span>
                </time>
                @if($post->external_url)
                    <h2 class="mt-0 mb-2 text-grey-darkest text-lg lg:text-xl">{{ $post->title }} 🔗</h2>
                    <a class="text-blue-light text-sm" href="{{ $post->external_url }}">Read more</a>
                @else
                    <h2 class="mt-0 mb-2 text-grey-darkest text-lg lg:text-xl">{{ $post->title }}</h2>
                    <p class="blogsummary hidden  text-base md:block">{!! $post->summary_short !!}</p>
                    <a class="text-blue-light text-sm" href="{{ $post->url }}">Read more</a>
                @endif
            </li>
        @endforeach
    </ul>

    <?php echo $posts->render(); ?>

    {{--@include('partials.social')--}}
    {{--@include('partials.footer')--}}

@endsection
