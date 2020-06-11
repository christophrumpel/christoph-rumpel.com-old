@if(!$searchTerm)
    <div class="flex justify-center" wire:loading>
        <img src="{{ asset('images/loading.svg') }}" alt="loading spinner">
    </div>
    <nav wire:loading.remove class="border-t border-gray-200 px-4 flex items-center justify-between sm:px-0">
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
                <span
                    class="-mt-px border-t-2 border-textBlue pt-4 px-4 inline-flex items-center text-sm leading-5 font-medium text-textBlue focus:outline-none focus:textBlue focus:textBlue transition ease-in-out duration-150">
                    {{ $currentPage }} / {{ $pagesCount }}
                </span>
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
