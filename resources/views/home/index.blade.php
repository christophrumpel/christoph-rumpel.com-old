@component('layouts.app')

            <ul class="flex flex-col sm:flex-wrap p-4 sm:justify-center w-full white flex-grow">
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

            <?php echo $posts->render(); ?>

            {{--@include('partials.social')--}}
            {{--@include('partials.footer')--}}

@endcomponent
