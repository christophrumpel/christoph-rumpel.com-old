@component('layouts.app')

    <div class="flex w-screen h-screen relative flex-row flex-wrap">
        <div class="profile-column relative overflow-hidden w-1/2">
            <div class="profile-column flex flex-col flex-wrap p-8 justify-center h-full w-full bg-teal-lighter bg-center">

            </div>
        </div>
        <div class="bg-cover relative overflow-hidden w-1/2 h-full">
            <div class="flex flex-col flex-wrap p-8 justify-center h-full w-full white">
                @foreach($posts as $post)
                    <li class="pb-8 pl-4 pr-4 w-full list-reset">
                        <p class="mb-2 text-grey-darkest font-bold uppercase">{{ $post->date }} | <span class="text-orange">PHP</span></p>
                        <h2 class="mb-2 text-grey-darkest">{{ $post->title }}</h2>
                        <p class="text-grey-dark leading-normal">I'm building a multi-tenant Laravel application. One of the requirements of the
                            project is that every client can have their own theme based on their corporate
                            guidelines.</p>
                        <a class="text-blue-light" href="{{ $post->url }}">Read more</a>
                    </li>
                @endforeach
            </div>
        </div>


    </div>

@endcomponent
