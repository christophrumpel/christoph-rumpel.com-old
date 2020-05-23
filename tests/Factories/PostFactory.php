<?php

namespace Tests\Factories;

use App\Post\Post;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Storage;

class PostFactory
{

    public static function new(): PostFactory
    {
        return new static();
    }

    public function create(): \stdClass
    {
        $destinationPath = Storage::disk('posts')
                ->getAdapter()
                ->getPathPrefix().'/dummy.md';
        copy(base_path('tests/dummy.md'), $destinationPath);

        $post = new \stdClass();
        $post->destination = $destinationPath;
        $post->title = 'Dummy 1';

        return $post;
    }

    public function createMultiple(int $times): Collection
    {
        return collect()->times($times, function ($count) {
            $destinationPath = Storage::disk('posts')
                    ->getAdapter()
                    ->getPathPrefix()."dummy_{$count}_.md";
            copy(base_path('tests/dummy.md'), $destinationPath);

            return new Post([
                'path' => $destinationPath,
                'title'  => "Dummy {$count}",
            ]);
        });
    }

}
