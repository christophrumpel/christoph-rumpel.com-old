<?php

namespace Tests\Factories;

use App\Post\Post;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class PostFactory
{

    public static function new(): PostFactory
    {
        return new static();
    }

    public function create(): string
    {
        return $this->createPostFile();
    }

    public function createMultiple(int $times): Collection
    {
        return collect()->times($times, function ($count) {
            $filePath = $this->createPostFile($count);
            $this->replaceFileDummyContent($count);

            return $filePath;
        });
    }

    private function createPostFile(int $count = 1): string
    {
        $destinationPath = Storage::disk('posts')
                ->getAdapter()
                ->getPathPrefix()."dummy_{$count}.md";

        copy(base_path('tests/dummy.md'), $destinationPath);

        return $destinationPath;
    }

    private function replaceFileDummyContent(int $count): void
    {
        $fileContent = Storage::disk('posts')
            ->get("dummy_{$count}.md");
        $replacedFileContent = Str::of($fileContent)
            ->replace('{{blog_title}}', "Blog Title {$count}");
        Storage::disk('posts')
            ->put("dummy_{$count}.md", $replacedFileContent);
    }

}
