@extends('layouts.home')

@section('content')

    <ul class="flex flex-col sm:flex-wrap p-8 mt-0 mb-0 sm:justify-center w-full white flex-grow">
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
                    <p class="mb-2 hidden  text-lg md:block">{!! $post->summary_short !!}</p>
                    <a class="text-blue-light text-sm" href="{{ $post->url }}">Read more</a>
                @endif
            </li>
        @endforeach
    </ul>

    <?php echo $posts->render(); ?>

    {{--@include('partials.social')--}}
    {{--@include('partials.footer')--}}

@endsection
