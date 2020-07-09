<?php

namespace App\Post;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Spatie\YamlFrontMatter\YamlFrontMatter;

class PostCollector
{

    public static function all(): Collection
    {
        return Cache::rememberForever('posts', function () {
            return collect(Storage::disk('posts')
                ->allFiles())
                ->map(fn($file) => FileToPostMapper::map($file))
                ->sortByDesc('date');
        });

    }

    public static function category(string $category): Collection
    {
        return self::all()
            ->filter(function (Post $post) use ($category) {
                return in_array(strtolower($category), $post->categories);
            });
    }

    public static function findBySlug(string $slug)
    {
        return collect(Storage::disk('posts')
            ->allFiles())
            ->filter(function ($fileName) use ($slug) {
                return Str::contains($fileName, $slug);
            })
            ->map(fn($file) => FileToPostMapper::map($file))
            ->first();
    }

    public static function findBySearchTerm(string $searchTerm): Collection
    {
        return collect(Storage::disk('posts')
            ->allFiles())
            ->filter(function ($fileName) use ($searchTerm) {
                return Str::contains($fileName, $searchTerm);
            })
            ->map(fn($file) => FileToPostMapper::map($file));
    }

    public static function paginate(int $postsPerPage, int $page): Collection
    {
        return self::all()
            ->skip(($page - 1) * $postsPerPage)
            ->take($postsPerPage);
    }

    public static function count(): int
    {
        return collect(Storage::disk('posts')
            ->allFiles())->count();
    }
}
