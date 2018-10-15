<nav class="p-8 sm:pt-0 sm:pr-0 sm:pl-8 sm:pb-0">
    <ul class="list-reset flex justify-center sm:justify-end">
        <li class="p-2 sm:ml-4 font-sans {{ optional(request()->route())->getName() === 'home' ? 'underline' : '' }}">
            <a class="text-grey-darkest  text-sm sm:text-lg no-underline hover:underline" href="{{ route('home') }}">Blog</a>
        </li>
        <li class="p-2 sm:ml-4 font-sans {{ optional(request()->route())->getName() === 'talks' ? 'underline' : '' }}">
            <a class="text-grey-darkest text-sm sm:text-lg no-underline hover:underline" href="{{ route('talks') }}">Talks</a>
        </li>
        <li class="p-2 sm:ml-4 font-sans">
            <a class="text-sm sm:text-lg no-underline hover:underline bg-green hover:bg-green-dark text-white font-bold py-2 px-4 rounded" href="{{ route('book') }}">Book</a>
        </li>
        <li class="p-2 sm:ml-4 font-sans {{ optional(request()->route())->getName() === 'newsletter' ? 'underline' : '' }}">
            <a class="text-grey-darkest text-sm sm:text-lg no-underline hover:underline" href="{{ route('newsletter') }}">Newsletter</a>
        </li>
    </ul>
</nav>