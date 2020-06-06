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
        return $this->createPostFile($this->title, Carbon::now());
    }

    public function createMultiple(int $times): Collection
    {
        $date = Carbon::today();
        return collect()->times($times, function ($currentCount, $key) use ($date, $times) {
            $postTitleNumber = $times - ($currentCount -1);
            return $this->createPostFile($this->title.' '.$postTitleNumber, $date->subDays($key));
        });
    }

    private function createPostFile(string $title = null, \Carbon\Carbon $date = null): string
    {
        $date = $date ?? Carbon::today();
        $slug = Str::slug($title ?? $this->title);
        $path = "{$date->format('Y-m-d')}.{$slug}.md";
        $destinationPath = Storage::disk('posts')
                ->getAdapter()
                ->getPathPrefix().$path;

        copy(base_path('tests/dummy.md'), $destinationPath);
        $this->replaceFileDummyContent($path, $title);

        return $destinationPath;
    }

    private function replaceFileDummyContent(string $path, string $title): void
    {
        $fileContent = Storage::disk('posts')
            ->get($path);
        $replacedFileContent = Str::of($fileContent)
            ->replace('{{blog_title}}', $title)
            ->replace('{{categories}}', implode(', ', $this->categories))
            ->replace('{{content}}', $this->content);
        Storage::disk('posts')
            ->put($path, $replacedFileContent);
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
