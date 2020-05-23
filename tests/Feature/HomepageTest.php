<?php

namespace Tests\Feature;

use Tests\Factories\PostFactory;
use Tests\TestCase;

class HomepageTest extends TestCase
{

    /** @test * */
    public function it_lists_latest_blog_posts(): void
    {

        $posts = PostFactory::new()
            ->createMultiple(3);

        $this->get('/')
            ->assertSee($posts[1]->title)
            ->assertSee($posts[2]->title)
            ->assertSee($posts[3]->title);
    }
}
