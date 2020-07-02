<x-main-layout>
    <main class="home">

        <header class="flex justify-center mb-16 p-12">
            <div class="flex flex-col">

                <img src="{{ asset('images/cr.png') }}" alt="Christoph Photo" width="200" height="200">
                <h2 class="font-display text-textBlue font-bold text-5xl">Hey, I'm Christoph. I
                    <code>code</code>,<br>
                    <code>write</code>
                    and <code>teach</code>.</h2>

            </div>
        </header>


        @livewire('post-list')

    </main>
</x-main-layout>
