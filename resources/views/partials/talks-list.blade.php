<ul class="list-reset">
    @foreach($talks as $talk)
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