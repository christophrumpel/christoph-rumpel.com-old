<?php

namespace App\Http\Livewire;

use App\Post\PostCollector;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;
use Livewire\Component;

class PostList extends Component
{

    public int $currentPage = 1;

    public int $pagesCount;

    public int $postPerPage = 15;

    public string $searchTerm = '';

    public function mount(): void
    {
        $this->pagesCount = ceil(PostCollector::count() / $this->postPerPage);
    }

    public function render()
    {

        $results = $this->searchTerm ? $this->searchResults() : PostCollector::paginate($this->postPerPage,
            $this->currentPage);

        return view('livewire.postList', ['results' => $results]);
    }

    private function searchResults(): Collection
    {
        // Reset current page
        $this->currentPage = 1;

        $searchTerm = strtolower($this->searchTerm);

        return PostCollector::all()
            ->filter(fn($post) => Str::of($post->title)
                    ->lower()
                    ->contains($searchTerm) || Str::of(implode(',', $post->categories))
                    ->contains($searchTerm));
    }

    public function nextPage(): void
    {
        $this->currentPage++;
    }

    public function previousPage(): void
    {
        $this->currentPage--;
    }
}
