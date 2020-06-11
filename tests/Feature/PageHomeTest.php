<?php

namespace Tests\Feature;

use Illuminate\Support\Facades\Cache;
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

    /** @test * */
    public function it_lists_latest_blog_post_first(): void
    {
        Storage::fake('posts');

        PostFactory::new()
            ->createMultiple(3);

        $this->get('/')
            ->assertSeeInOrder([
                'My Blog Title 3',
                'My Blog Title 2',
                'My Blog Title 1',
            ]);
    }

    /** @test * */
    public function it_paginates_posts_list(): void
    {
        Storage::fake('posts');

        PostFactory::new()
            ->createMultiple(30);

        for ($postCount = 30; $postCount > 15; $postCount--) {
            $this->get('/')
                ->assertSee("My Blog Title $postCount");
        }

        $this->get('/')
            ->assertDontSee('My Blog Title 15');
    }

    /** @test  */
    function it_sees_post_list_component_on_home_page()
    {
        $this->get('/')->assertSeeLivewire('post-list');
    }
}
