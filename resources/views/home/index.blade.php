@extends('layouts.home')

@section('content')

            <ul class="flex flex-col sm:flex-wrap p-8 mt-0 mb-0 sm:justify-center w-full white flex-grow">
                @foreach($posts as $post)
                    <li class="mb-4 w-full list-reset">
                        <time class="mb-0 text-grey-darkest font-bold uppercase text-sm font-sans">{{ $post->dateShort }} | <span
                                    class="text-orange"> {{ collect(['PHP', 'Chatbots', 'Git'])->random() }}</span>
                        </time>
                        <h2 class="mt-0 mb-2 text-grey-darkest text-lg lg:text-xl">{{ $post->title }}</h2>
                        <p class="mb-2 hidden  text-lg md:block">I'm building a
                            multi-tenant Laravel
                            application. One of
                            the requirements of the
                            project is that every client can have their own theme based on their corporate
                            guidelines.</p>
                        <a class="text-blue-light text-sm" href="{{ $post->url }}">Read more</a>
                    </li>
                @endforeach
            </ul>

            <?php echo $posts->render(); ?>

            {{--@include('partials.social')--}}
            {{--@include('partials.footer')--}}

@endsection
