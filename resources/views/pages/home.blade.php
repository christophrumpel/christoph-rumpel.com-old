<x-home-layout>
    <main class="home">

        <header class="flex justify-center mb-16 p-12">
            <div class="flex flex-col">

                @include('partials.nav')


                        <img src="{{ asset('images/cr.png') }}" alt="Christoph Photo" width="200" height="200">
                        <h2 class="font-display text-textBlue font-bold text-5xl">Hey, I'm Christoph. I
                            <code>write</code>,<br>
                            <code>speak</code>
                            and <code>teach</code>.</h2>

            </div>
        </header>

        <div class="container mx-auto  max-w-5xl p-12">

            @livewire('post-list')
        </div>

    </main>
</x-home-layout>
