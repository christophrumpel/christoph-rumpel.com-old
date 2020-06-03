<?php

namespace Tests\Feature;

use Illuminate\Support\Facades\Storage;
use Tests\Factories\PostFactory;
use Tests\TestCase;

class PageHomeTest extends TestCase
{

    /** @test * */
    public function it_lists_latest_blog_posts(): void
    {
        Storage::fake('posts');

        PostFactory::new()
            ->createMultiple(3);

        $this->get('/')
            ->assertSee('My Blog Title 1')
            ->assertSee('My Blog Title 2')
            ->assertSee('My Blog Title 3');
    }

    /** @test **/
    public function it_lists_latest_blog_post_first(): void
    {
        Storage::fake('posts');

        PostFactory::new()
            ->createMultiple(3);

        $this->get('/')
            ->assertSeeInOrder([
                'My Blog Title 3',
                'My Blog Title 2',
                'My Blog Title 1'
            ]);
    }
}
