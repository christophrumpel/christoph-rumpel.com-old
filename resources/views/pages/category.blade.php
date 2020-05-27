<x-app-layout>
    @foreach($posts as $post)
        <h2>{{$post->title}}</h2>
    @endforeach
</x-app-layout>
