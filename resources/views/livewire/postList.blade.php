<div>
    <input wire:model="searchTerm" type="text" placeholder="Search for..."
           class="form-input relative rounded-md shadow-sm p-2"/>

    <ul>
        @foreach($results as $result)
            <li class="my-4 p-8 border-textBlue border-t-2">

                <h2 class="font-display text-3xl text-textBlue">
                    <a class="block"
                       href="{{$result->link()}}">{{ $result->title }}</a>
                </h2>

            </li>
        @endforeach
    </ul>

    @include('livewire.postListSearchNav')
</div>
