<?php

namespace App\Post;

use Illuminate\Support\Carbon;

class Post
{

    public string $path;

    public string $title;

    public array $categories = [];

    public string $previewImage;

    public string $previewImageTwitter;

    public string $content;

    public \Carbon\Carbon $date;

    public string $slug;

    public string $summary;

    public function __construct(array $attributes)
    {
        $this->path = $attributes['path'];
        $this->title = $attributes['title'] ?? '';
        $this->categories = $attributes['categories'] ?? [];
        $this->previewImage = $attributes['preview_image'] ?? '';
        $this->previewImageTwitter = $attributes['preview_image_twitter'] ?? '';
        $this->content = $attributes['content'] ?? '';
        $this->date = Carbon::createFromFormat('Y-m-d', $attributes['date']);
        $this->slug = $attributes['slug'] ?? '';
        $this->summary = $attributes['summary'] ?? '';
    }

    public function link(): string
    {
        return route('page.post', ['year' => $this->date->year, 'month' => $this->date->month, 'slug' => $this->slug]);
    }
}
