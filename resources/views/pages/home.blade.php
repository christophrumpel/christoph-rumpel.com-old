<x-app-layout>
    <main class="home">

        <header class="flex flex-col p-12">

            <nav class="w-full">
                <ul class="list-none flex justify-end">
                    <li class="p-4"><a href="">Products</a></li>
                    <li class="p-4"><a href="">Speaking</a></li>
                </ul>
            </nav>

            <img src="{{ asset('images/cr.png') }}" alt="Christoph Photo" width="200" height="200">
            <h2 class="font-display text-textBlue font-bold text-5xl">Hey, I'm Christoph. I <span class="underline">develop</span>, <span class="underline">build</span> and <code>teach</code>.</h2>
        </header>

        @livewire('post-list')


    </main>
</x-app-layout>
