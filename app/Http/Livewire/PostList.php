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
        $this->pagesCount = PostCollector::count() / $this->postPerPage + 1;
    }

    public function render()
    {
        $results = $this->searchTerm ? $this->searchResults($this->searchTerm) : PostCollector::paginate($this->postPerPage,
            $this->currentPage);

        return view('livewire.postList', ['results' => $results]);
    }

    private function searchResults(): Collection
    {
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
