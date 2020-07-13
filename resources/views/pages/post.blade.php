<x-main-layout :post="$post">
    <main class="mt-16">

        <article class="post">
            <time class="text-textBlue font-bold"
                  datetime="{{ $post->date->format('Y-m-d') }}">{{ $post->date->format('F Y') }}</time>
            <h1 class="font-display font-bold text-3xl lg:text-5xl mb-8 text-textBlue"><span
                    class="title-highlight-underline">{{$post->title}}</span></h1>

            @foreach($post->categories as $category)
                <a href="{{ route('page.category', $category) }}"
                   class="border-black border-2 rounded p-2 uppercase text-link">#{{$category}}</a>
            @endforeach

            <p class="text-xl lg:text-2xl my-6 ">
                {!! $post->summary !!}
            </p>
            <div class="post-markdown">
                {!! $post->content !!}
            </div>
        </article>

        @include('partials.newsletter')
    </main>
</x-main-layout>
