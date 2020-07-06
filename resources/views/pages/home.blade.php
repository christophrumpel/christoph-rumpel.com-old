<x-main-layout>
    <main class="home">

        <header class="flex justify-center mb-16 p-12">
            <div class="flex flex-col">

                <img src="{{ asset('images/cr.png') }}" alt="Christoph Photo" width="200" height="200">
                <h2 class="font-display text-textBlue font-bold text-5xl">Hey, I'm Christoph. I
                    <code>code</code>. I <code>teach</code> how to code.
                    I <code>write</code> about how I teach to code.</h2>

            </div>
        </header>


        @livewire('post-list')

    </main>
</x-main-layout>
