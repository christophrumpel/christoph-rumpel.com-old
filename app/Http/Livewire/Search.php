<?php

namespace App\Http\Livewire;

use App\Post\PostCollector;
use Illuminate\Support\Collection;
use Livewire\Component;

class Search extends Component
{

    public string $searchTerm = '';

    public function render()
    {
        $results = PostCollector::findBySearchTerm($this->searchTerm);

        return view('livewire.search', ['results' => $results]);
    }
}
