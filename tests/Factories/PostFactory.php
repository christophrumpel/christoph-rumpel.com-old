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

    private string $content = '';

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
            return $this->createPostFile($this->title.' '.$currentCount);
        });
    }

    private function createPostFile(string $title = null): string
    {
        $slug = Str::slug($title ?? $this->title);
        $destinationPath = Storage::disk('posts')
                ->getAdapter()
                ->getPathPrefix()."{$slug}.md";

        copy(base_path('tests/dummy.md'), $destinationPath);
        $this->replaceFileDummyContent($slug, $title);

        return $destinationPath;
    }

    private function replaceFileDummyContent(string $slug, string $title): void
    {
        $fileContent = Storage::disk('posts')
            ->get("{$slug}.md");
        $replacedFileContent = Str::of($fileContent)
            ->replace('{{blog_title}}', $title)
            ->replace('{{categories}}', implode(', ', $this->categories))
            ->replace('{{content}}', $this->content);
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

    public function content(string $content): self
    {
       $this->content = $content;

       return $this;
    }

}
