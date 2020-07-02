<div>
    <div class="flex justify-between mb-16">
        <h2 class="font-display text-4xl text-textBlue">Here are my latest blog posts:</h2>
        <input wire:model="searchTerm" type="text" class="text-center rounded" placeholder="Search posts..."
               class="form-input relative rounded-md shadow-sm p-2"/>
    </div>

    <ul class="post-list">
        @foreach($results as $result)
            <li class="my-4 border-textBlue border-t-2">
                <a class="block p-8"
                   href="{{$result->link()}}">
                    <h2 class="font-display text-3xl text-textBlue">
                        {{ $result->title }}
                    </h2>
                </a>
            </li>
        @endforeach
    </ul>

    @include('livewire.postListSearchNav')
</div>
