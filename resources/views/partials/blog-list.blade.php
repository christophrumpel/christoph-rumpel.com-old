<ul class="flex flex-col p-0 mt-0 mb-0 sm:justify-center w-full white flex-grow">
    @foreach($posts as $post)
        <li class="mb-4 w-full list-reset">
            <time class="mb-0 text-grey-darkest font-bold uppercase text-sm font-sans tracking-wide">{{ $post->dateShort }}
                |
                @foreach($post->categories as $category)
                    <a href="{{route('posts.category', ['category' => $category])}}"
                       class="text-orange">{{ $category }}</a>
                @endforeach

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