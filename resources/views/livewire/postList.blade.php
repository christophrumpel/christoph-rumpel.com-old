<div class="">
    <input wire:model="searchTerm" type="text" placeholder="Search for..."
           class="form-input relative rounded-md shadow-sm p-2"/>
    <button>Search</button>


    <ul>
        @foreach($results as $result)
            <li class="my-4 p-8 border-textBlue border-2">

                <h2 class="font-display text-3xl text-textBlue">
                    <a class="block"
                       href="{{$result->link()}}">{{ $result->title }}</a>
                </h2>

            </li>
        @endforeach
    </ul>

    <p>Current page: {{ $currentPage }}</p>
    @if(!$searchTerm)
        @if($currentPage !== $pagesCount)
            <button wire:click="nextPage">Next Page</button>
        @endif

        @if($currentPage !== 1)
            <button wire:click="previousPage">Previous Page</button>
        @endif
    @endif
</div>
