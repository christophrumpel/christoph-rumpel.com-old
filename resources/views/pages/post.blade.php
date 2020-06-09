<x-app-layout>
    <article class="post">

        <time class="text-textBlue font-bold"
              datetime="{{ $post->date->format('Y-m-d') }}">{{ $post->date->format('F Y') }}</time>
        <h1 class="font-display font-bold text-5xl mb-8 text-textBlue"><span class="title-highlight-underline">{{$post->title}}</span></h1>
        <span class="border-black border-2 rounded p-2 uppercase">{{implode(', ', $post->categories)}}</span>

        <p>
            {!! $post->summary !!}
        </p>

        {!! $post->content !!}
    </article>
</x-app-layout>
