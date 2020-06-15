<x-main-layout>
    @foreach($posts as $post)
        <h2>{{$post->title}}</h2>
    @endforeach
</x-main-layout>
