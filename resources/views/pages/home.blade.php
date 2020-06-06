<x-app-layout>
    @livewire('search')

@foreach($posts as $post)
        <h2><a href="{{$post->link()}}">{{$post->title}}</a></h2>
@endforeach
</x-app-layout>
