<div>
    <div x-data="{ open: false }">
        <div class="flex flex-col lg:flex-row items-center lg:justify-between mb-16">
            <h2 class="font-display text-4xl text-textBlue">From the blog:</h2>

            <button class="search-btn flex flex-row" @click="open = !open">
                @include('partials.svg.search')
            </button>

        </div>
        <div id="search" x-cloak x-show="open">
            <input wire:model="searchTerm" type="text"
                   placeholder="Search by keywords like laravel, business, setup..."
                   class="w-full form-input relative rounded-md shadow-sm p-4 text-xs md:text-lg lg:text-2xl text-center rounded"/>
        </div>

        <ul class="post-list">
            @foreach($results as $result)
                <li class="my-8 bg-white border-textBlue border-2">
                    <a class="block p-8"
                       href="{{$result->link()}}">
                        <h2 class="font-display sm: text-xl lg:text-3xl text-textBlue">
                            {{ $result->title }}
                        </h2>
                    </a>
                </li>
            @endforeach
        </ul>
    </div>

    @include('livewire.postListSearchNav')
</div>
