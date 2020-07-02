<x-main-layout>
    <main class="page category">

        <h1>Posts of the type <code>{{ $category }}</code></h1>
        <ul>
            @foreach($posts as $post)
                <li class="my-4 p-8 border-textBlue border-t-2">

                    <h2 class="font-display text-3xl text-textBlue">
                        <a class="block"
                           href="{{$post->link()}}">{{ $post->title }}</a>
                    </h2>

                </li>
            @endforeach
        </ul>
    </main>
</x-main-layout>
