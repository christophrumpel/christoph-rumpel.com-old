<nav class="pt-8 pr-8 pl-8">
    <ul class="list-reset flex justify-end">
        <li class="ml-4 {{ request()->route()->getName() === 'home' ? 'underline' : '' }}">
            <a class="text-grey-darkest no-underline" href="{{ route('home') }}">Blog</a>
        </li>
        <li class="ml-4 {{ request()->route()->getName() === 'talks' ? 'underline' : '' }}">
            <a class="text-grey-darkest no-underline" href="{{ route('talks') }}">Talks</a>
        </li>
    </ul>
</nav>