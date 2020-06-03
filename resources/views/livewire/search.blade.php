<div>
    <input wire:model="searchTerm" type="text" placeholder="Search for..."/>
    <button>Search</button>

    <ul class="absolute bg-blue-400">
        @foreach($results as $result)
            <li>{{ $result->title }}</li>
        @endforeach
    </ul>
</div>
