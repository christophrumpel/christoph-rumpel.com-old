<x-main-layout>
    <main class="home">

        <div class="flex flex-col lg:flex-row justify-evenly items-center my-24 lg:my-48">

            <img class="mb-12 lg:mb-0 lg:mr-12" src="{{ asset('images/cr.png') }}" alt="Christoph Photo" width="200" height="200">
            <h2 class="font-display text-textBlue text-2xl lg:text-3xl max-w-2xl">Hey, I'm Christoph. I
                <code>code</code>. I <code>write</code> about code. I <code>teach</code> how I write code.
                I <code>talk</code> at conferences about how I teach to code.</h2>

        </div>


        @livewire('post-list')

    </main>
</x-main-layout>
