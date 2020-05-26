<x-app-layout>
    <h2>Upcoming</h2>
    <ul>
    @foreach($talks->upcoming as $talk)
        <li>{{ $talk->title }}</li>
        <li>{{ $talk->date }}</li>
        <li>{{ $talk->location }}</li>
        <li>{{ $talk->event }}</li>
    @endforeach
    </ul>

    <h2>Past</h2>
    <ul>
        @foreach($talks->past as $talk)
            <li>{{ $talk->title }}</li>
            <li>{{ $talk->date }}</li>
            <li>{{ $talk->location }}</li>
            <li>{{ $talk->event }}</li>
        @endforeach
    </ul>
</x-app-layout>
