<nav class="p-8 sm:pt-0 sm:pr-8 sm:pl-8 sm:pb-0">
    <ul class="list-reset flex justify-center sm:justify-end">
        <li class="p-2 sm:ml-4 font-sans {{ request()->route()->getName() === 'home' ? 'underline' : '' }}">
            <a class="text-grey-darkest  text-lg no-underline" href="{{ route('home') }}">Blog</a>
        </li>
        <li class="p-2 sm:ml-4 font-sans {{ request()->route()->getName() === 'talks' ? 'underline' : '' }}">
            <a class="text-grey-darkest text-lg no-underline" href="{{ route('talks') }}">Talks</a>
        </li>
    </ul>
</nav>