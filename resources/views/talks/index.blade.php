@extends('layouts.blog')

@section('meta')
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
@endsection

@section('content')
    <article class="mt-8 mb-8">
        <h1 class="mt-2 mb-8 text-grey-darkest text-4xl">Talks</h1>

        <p> I see a lot of benefits in being able to talk about coding and projects in front of other people. Your
            audience can learn from your experiences and you get to meet lots of different people from all around the
            world. Additionally you will learn a lot while preparing your talks.</p>
        <img class="my-8" src="/images/blog/cr_talking.jpg" alt="Christoph talking on stage">

        <br/><br/>
        <p>Right now I am talking about these topics</p>
        <ul>
            <li>Laravel PHP Framework</li>
            <li>Chatbots</li>
            <li>Content Security Policy</li>
        </ul>

        <h2>Upcoming talks</h2>
        <ul class="list-reset">
            @foreach($talksFuture as $talk)
                <li class="mb-8 w-full list-reset bg-grey-lighter p-4">
                    <p>
                        <time class="mb-0 text-grey-darkest font-bold uppercase text-sm font-sans">{{ $talk->date }} |
                            <span class="text-orange">{{ $talk->city ?? '' }}</span>
                        </time>
                    </p>

                    <a class="no-underline" href="{{ $talk->url }}">
                        <h2 class="mt-0 mb-2 text-grey-darkest text-lg lg:text-xl">{{ $talk->event }}</h2>
                    </a>

                    <p class="blogsummary  text-base md:block">Talk: {{ $talk->talk }}</p>
                    <a class="text-blue-light text-sm" href="{{ $talk->url }}">Visit event</a>
                    @if(isset($talk->slides))
                        <a class="text-blue-light text-sm" href="{{ $talk->slides }}">Show slides</a>
                    @endif

                    @if(isset($talk->video))
                        <a class="text-blue-light text-sm" href="{{ $talk->video }}">Show video</a>
                    @endif
                </li>
            @endforeach
        </ul>

        <h2>My last talks</h2>
        <ul class="list-reset">
            @foreach($talksPast as $talk)
                <li class="mb-8 w-full list-reset bg-grey-lighter p-4">
                    <p>
                        <time class="mb-0 text-grey-darkest font-bold uppercase text-sm font-sans">{{ $talk->date }} |
                            <span class="text-orange">{{ $talk->city ?? '' }}</span>
                        </time>
                    </p>

                    <a class="no-underline" href="{{ $talk->url }}">
                        <h2 class="mt-0 mb-2 text-grey-darkest text-lg lg:text-xl">{{ $talk->event }}</h2>
                    </a>

                    <p class="blogsummary  text-base md:block">Talk: {{ $talk->talk }}</p>
                    <a class="text-blue-light text-sm" href="{{ $talk->url }}">Visit event</a>
                    @if(isset($talk->slides))
                        <a class="text-blue-light text-sm" href="{{ $talk->slides }}">Show slides</a>
                    @endif

                    @if(isset($talk->video))
                        <a class="text-blue-light text-sm" href="{{ $talk->video }}">Show video</a>
                    @endif
                </li>
            @endforeach
        </ul>
    </article>

@endsection