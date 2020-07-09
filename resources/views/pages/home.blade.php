<x-main-layout>
    <main class="home">

        <header class="flex flex-row justify-evenly items-center my-20 py-12">

            <img class="mr-12" src="{{ asset('images/cr.png') }}" alt="Christoph Photo" width="200" height="200">
            <h2 class="font-display text-textBlue text-3xl">Hey, I'm Christoph. I
                <code>code</code>. I <code>write</code> about code. I <code>teach</code> how I write code.
                I <code>talk</code> at conferences about how I teach to code.</h2>

        </header>


        @livewire('post-list')

    </main>
</x-main-layout>
