<?php

namespace Tests\Factories;

use Illuminate\Support\Carbon;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class PostFactory
{

    private string $title = 'My Blog Title';

    private array $categories = [];

    public static function new(): PostFactory
    {
        return new static();
    }

    public function create(): string
    {
        return $this->createPostFile($this->title, $this->categories, Carbon::now());
    }

    public function createMultiple(int $times): Collection
    {
        return collect()->times($times, function ($currentCount) {
            return $this->createPostFile($this->title.' '.$currentCount, $this->categories, Carbon::now());
        });
    }

    private function createPostFile(string $title, array $categories, Carbon $date): string
    {
        $slug = Str::slug($title);
        $destinationPath = Storage::disk('posts')
                ->getAdapter()
                ->getPathPrefix()."{$slug}.md";

        copy(base_path('tests/dummy.md'), $destinationPath);
        $this->replaceFileDummyContent($title, $slug, $categories);

        return $destinationPath;
    }

    private function replaceFileDummyContent(string $title, string $slug, array $categories): void
    {
        $fileContent = Storage::disk('posts')
            ->get("{$slug}.md");
        $replacedFileContent = Str::of($fileContent)
            ->replace('{{blog_title}}', $title)
            ->replace('{{categories}}', implode(', ', $categories));
        Storage::disk('posts')
            ->put("{$slug}.md", $replacedFileContent);
    }

    public function title(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function categories(array $categories): self
    {
        $this->categories = $categories;

        return $this;
    }

}
