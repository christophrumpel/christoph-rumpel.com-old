<nav class="w-full">
    <ul class="flex justify-end">
        <li class="mr-auto">
            @include('partials.logo')
        </li>
        <li class="text-2xl p-4"><a href="/">Blog</a></li>
        <li class="text-2xl p-4"><a href="{{ route('page.products') }}">Products</a></li>
        <li class="text-2xl p-4"><a href="{{ route('page.speaking') }}">Speaking</a></li>
        <li class="text-2xl p-4"><a href="{{ route('page.uses') }}">Uses</a></li>
    </ul>
</nav>
