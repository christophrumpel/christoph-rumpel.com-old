<x-main-layout>
    <div class="container mx-auto  max-w-5xl p-12">

        <article class="post page">

            <time class="text-textBlue font-bold"
                  datetime="{{ $post->date->format('Y-m-d') }}">{{ $post->date->format('F Y') }}</time>
            <h1 class="font-display font-bold text-5xl mb-8 text-textBlue"><span
                    class="title-highlight-underline">{{$post->title}}</span></h1>

            @foreach($post->categories as $category)
                <a href="{{ route('page.category', $category) }}"
                   class="border-black border-2 rounded p-2 uppercase ">#{{$category}}</a>
            @endforeach

            <p>
                {!! $post->summary !!}
            </p>

            {!! $post->content !!}
        </article>

        @include('partials.newsletter')
    </div>
</x-main-layout>
