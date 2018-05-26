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
            <li>The State Of Chatbots 2018</li>
            <li>Content Security Policy 101</li>
            <li>The Beauty of Laravel's Notification System and How It Helped Me to Create My First Laravel Package</li>
            <li>The PHP Developer Stack for Building Chatbots</li>
        </ul>

        <h2>Upcoming talks</h2>
        @include('partials.talks-list', ['talks' => $talksFuture])

        <h2>My last talks</h2>
        @include('partials.talks-list', ['talks' => $talksPast])
    </article>

@endsection