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

    @if(!$searchTerm)
        <nav class="border-t border-gray-200 px-4 flex items-center justify-between sm:px-0">
            <div class="w-0 flex-1 flex">
                @if($currentPage !== 1)
                    <button wire:click="previousPage"
                            class="-mt-px border-t-2 border-transparent pt-4 pr-1 inline-flex items-center text-sm leading-5 font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-400 transition ease-in-out duration-150">
                        <svg class="mr-3 h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd"
                                  d="M7.707 14.707a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l2.293 2.293a1 1 0 010 1.414z"
                                  clip-rule="evenodd"/>
                        </svg>
                        Previous
                    </button>
                @endif
            </div>
            <div class="hidden md:flex">
                <a href="#"
                   class="-mt-px border-t-2 border-indigo-500 pt-4 px-4 inline-flex items-center text-sm leading-5 font-medium text-indigo-600 focus:outline-none focus:text-indigo-800 focus:border-indigo-700 transition ease-in-out duration-150">
                    {{ $currentPage }} / {{ $pagesCount }}
                </a>
            </div>
            <div class="w-0 flex-1 flex justify-end">
                @if($currentPage !== $pagesCount)
                    <button wire:click="nextPage"
                            class="-mt-px border-t-2 border-transparent pt-4 pl-1 inline-flex items-center text-sm leading-5 font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-400 transition ease-in-out duration-150">
                        Next
                        <svg class="ml-3 h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd"
                                  d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                                  clip-rule="evenodd"/>
                        </svg>
                    </button>
                @endif
            </div>
        </nav>
    @endif
</div>
