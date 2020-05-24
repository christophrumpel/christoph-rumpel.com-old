<?php

namespace App\Post;

class Post
{

    public string $path;

    public string $title;

    public array $categories = [];

    public string $content;

    public function __construct(array $attributes)
    {
        $this->path = $attributes['path'];
        $this->title = $attributes['title'] ?? '';
        $this->categories = $attributes['categories'] ?? [];
        $this->content = $attributes['content'] ?? '';
    }
}
