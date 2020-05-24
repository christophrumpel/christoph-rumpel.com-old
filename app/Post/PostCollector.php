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
            ->allFiles())->map(function ($fileName) {
            $filePath = Storage::disk('posts')
                    ->getAdapter()
                    ->getPathPrefix().$fileName;

            $postMetaData = YamlFrontMatter::parse(file_get_contents($filePath));

            return new Post([
                'path' => $filePath,
                'title' => $postMetaData->matter('title'),
            ]);
        });
    }

    public static function find(string $slug)
    {
        return collect(Storage::disk('posts')
            ->allFiles())
            ->filter(function ($fileName) use ($slug) {
                return Str::contains($fileName, $slug);
            })
            ->map(function ($fileName) {
                $filePath = Storage::disk('posts')
                        ->getAdapter()
                        ->getPathPrefix().$fileName;


                $postMetaData = YamlFrontMatter::parse(file_get_contents($filePath));

                return new Post([
                    'path' => $filePath,
                    'title' => $postMetaData->matter('title'),
                    'categories' => explode(', ', $postMetaData->matter('categories'))
                ]);
            })
            ->first();
    }
}
