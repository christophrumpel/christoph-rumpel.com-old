<x-main-layout>
    <main class="page speaking">

        <h1>Speaking</h1>

        <img src="{{ asset('images/pages/speaking.jpg') }}" alt="Christoph speaking at a conference.">

        <p>In 2015, I gave my first talk ever, and it was terrifying! I will never forget how nervous I was and how terrible I felt. But I also remember the feeling afterward; I felt relieved, proud, and got in touch with some attendees to discuss my topic.</p>
        <p>
            I kept on doing talks, and some years later, I eventually was able to speak at international conferences and also get paid. Being able to talk about code and my business has become a valuable skill for me and I wouldn't want to miss it.</p>

        <p>Currently I speak about:</p>
        <ul>
            <li><code>PHP</code></li>
            <li><code>Laravel</code></li>
            <li><code>PhpStorm</code></li>
            <li><code>My one-person business</code></li>
        </ul>

        <p>If you would like to have me on your conference or meetup, <a class="text-link" href="https://twitter.com/christophrumpel/">please contact me on Twitter</a>.</p>

        <h2>Upcoming</h2>
        @if(count($talks->upcoming))
            <ul>
                @foreach($talks->upcoming as $talk)
                    <li>
                        <h3>{{ $talk->date }}</h3>
                        <p>

                            {{ $talk->title }}

                            {{ $talk->location }}
                            {{ $talk->event }}
                        </p>
                    </li>
                @endforeach
            </ul>
        @else
            <p>I don't have any talks planned so far.</p>
        @endisset

        <h2>Past</h2>
        <ul>
            @foreach($talks->past as $talk)
                <li>
                    <h3>{{ $talk->date }} - {{ $talk->event }}</h3>
                    <p>

                        {{ $talk->title }}

                        {{ $talk->location }}

                    </p>
                </li>
            @endforeach
        </ul>
    </main>
</x-main-layout>
