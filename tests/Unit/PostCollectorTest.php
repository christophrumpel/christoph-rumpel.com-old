<?php

namespace Tests\Unit;

use App\Post\Post;
use App\Post\PostCollector;
use Illuminate\Support\Facades\Storage;
use Tests\Factories\PostFactory;
use Tests\TestCase;

class PostCollectorTest extends TestCase
{

    /** @test **/
    public function it_collects_all_given_posts_from_filesystem(): void
    {
        Storage::fake('posts');

        PostFactory::new()
            ->createMultiple(10);

    	$posts = PostCollector::all();

    	$this->assertCount(10, $posts);
    	$this->assertInstanceOf(Post::class, $posts->first());
    }
}
