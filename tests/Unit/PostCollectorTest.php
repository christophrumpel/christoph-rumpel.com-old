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

    /** @test **/
    public function it_finds_a_specific_post(): void
    {
        Storage::fake('posts');

        PostFactory::new()
            ->title('My Company Of One Story - Episode 2 Motivation')
            ->create();

        $post = PostCollector::find('my-company-of-one-story-episode-2-motivation');

        $this->assertInstanceOf(Post::class, $post);
        $this->assertEquals('My Company Of One Story - Episode 2 Motivation', $post->title);
    }

    /** @test **/
    public function it_finds_post_of_a_specific_category(): void
    {
        Storage::fake('posts');

        PostFactory::new()
            ->categories(['business'])
            ->title('My Business')
            ->create();

        PostFactory::new()
            ->categories(['laravel'])
            ->title('My Laravel')
            ->create();

        $posts = PostCollector::category('business');

        $this->assertCount(1, $posts);
        $this->assertEquals('My Business', $posts->first()->title);
    }
}
