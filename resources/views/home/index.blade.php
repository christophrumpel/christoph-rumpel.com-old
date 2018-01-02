@component('layouts.app')
    <div class="flex w-screen h-screen relative flex-row flex-wrap">
        <div class="profile-column relative overflow-hidden w-1/2 flex justify-center">
            <div class="profile-column flex items-end p-8 justify-center h-full w-full bg-teal-lighter bg-center text-white">
                <div class="text-center pb-8">
                    <h1 class="mb-4">christoph rumpel</h1>
                    <p class="text-green text-xl">web developer</p>
                </div>
            </div>
        </div>
        <div class="bg-cover relative overflow-hidden w-1/2 h-full">
            @include('partials.nav')
            <ul class="flex flex-col flex-wrap p-4 justify-center h-full w-full white">
                @foreach($posts as $post)
                    <li class="pb-8 mb-4 pl-4 pr-4 w-full list-reset">
                        <p class="mb-2 text-grey-darkest font-bold uppercase text-sm">{{ $post->date }} | <span
                                    class="text-orange"> {{ collect(['PHP', 'Chatbots', 'Git'])->random() }}</span>
                        </p>
                        <h2 class="mb-2 text-grey-darkest text-lg lg:text-2xl">{{ $post->title }}</h2>
                        <p class="text-grey-dark leading-normal mb-2 font-serif hidden md:block">I'm building a
                            multi-tenant Laravel
                            application. One of
                            the requirements of the
                            project is that every client can have their own theme based on their corporate
                            guidelines.</p>
                        <a class="text-blue-light text-sm" href="{{ $post->url }}">Read more</a>
                    </li>
                @endforeach
            </ul>
            {{--@include('partials.social')--}}
            {{--@include('partials.footer')--}}

        </div>


    </div>

@endcomponent
