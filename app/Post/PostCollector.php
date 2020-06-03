<?php

namespace App\Post;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Spatie\YamlFrontMatter\YamlFrontMatter;

class PostCollector
{

    public static function all(): Collection
    {
        return collect(Storage::disk('posts')
            ->allFiles())->mapFileNamesToPosts();
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
            ->mapFileNamesToPosts()
            ->first();
    }

    public static function findBySearchTerm(string $searchTerm): Collection
    {
        return collect(Storage::disk('posts')
                ->allFiles())->filter(function ($fileName) use ($searchTerm) {
                    return Str::contains($fileName, $searchTerm);
                })->mapFileNamesToPosts();
    }
}
