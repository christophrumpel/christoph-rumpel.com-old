<?php

namespace Tests;

use Illuminate\Support\Facades\Storage;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;

    /**
     * @param string $postNumber
     */
    public function createBlogPost(string $postNumber = '1')
    {
        Storage::disk('content')
            ->put('/posts/2018-01-17.post'.$postNumber.'.md',
                file_get_contents(base_path('tests/fixtures/blog-post'.$postNumber.'.md')));
    }

    public function createUnpublishedBlogPost()
    {
        Storage::disk('content')
            ->put('/posts/2018-01-17.unpublished-post.md',
                file_get_contents(base_path('tests/fixtures/unpublished-blog-post.md')));
    }
}