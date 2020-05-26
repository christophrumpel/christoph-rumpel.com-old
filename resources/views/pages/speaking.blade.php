<x-app-layout>
    @foreach($talks as $talk)
        <p>{{ $talk->title }}</p>
        <p>{{ $talk->date }}</p>
        <p>{{ $talk->location }}</p>
        <p>{{ $talk->event }}</p>
    @endforeach
</x-app-layout>
