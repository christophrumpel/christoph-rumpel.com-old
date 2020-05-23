<?php

namespace App\Post;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Storage;

class PostCollector
{

    public static function all(): Collection
    {
        return collect(Storage::disk('posts')
            ->allFiles())->map(function ($file) {
            return new Post(['path' => $file]);
        });
    }
}
