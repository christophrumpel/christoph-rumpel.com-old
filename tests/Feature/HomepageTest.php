<?php

namespace Tests\Feature;

use Illuminate\Support\Facades\Storage;
use Tests\Factories\PostFactory;
use Tests\TestCase;

class HomepageTest extends TestCase
{

    /** @test * */
    public function it_lists_latest_blog_posts(): void
    {
        Storage::fake('posts');

        PostFactory::new()
            ->createMultiple(3);

        $this->get('/')
            ->assertSee('Blog Title 1')
            ->assertSee('Blog Title 2')
            ->assertSee('Blog Title 3');
    }
}
