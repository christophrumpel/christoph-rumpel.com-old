<?php

namespace Tests\Unit;

use App\Post\Post;
use App\Post\PostCollector;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Storage;
use Tests\Factories\PostFactory;
use Tests\TestCase;

class PostCollectorTest extends TestCase
{

    /** @test * */
    public function it_collects_all_given_posts_from_filesystem(): void
    {
        Storage::fake('posts');

        PostFactory::new()
            ->createMultiple(10);

        $posts = PostCollector::all();

        $this->assertCount(10, $posts);
        $this->assertInstanceOf(Post::class, $posts->first());
        $this->assertTrue($posts->first()->date->isToday());
        $this->assertTrue($posts->skip(1)
            ->first()->date->isYesterday());
    }

    /** @test * */
    public function it_finds_a_specific_post_by_slug(): void
    {
        Storage::fake('posts');

        PostFactory::new()
            ->title('My Company Of One Story - Episode 2 Motivation')
            ->create();

        $post = PostCollector::findBySlug('my-company-of-one-story-episode-2-motivation');

        $this->assertInstanceOf(Post::class, $post);
        $this->assertEquals('My Company Of One Story - Episode 2 Motivation', $post->title);
    }

    /** @test * */
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

    /** @test * */
    public function it_searches_posts_by_search_term(): void
    {
        Storage::fake('posts');

        PostFactory::new()
            ->title('My Company Of One Story - Episode 2 Motivation')
            ->create();

        $results = PostCollector::findBySearchTerm('company');

        $this->assertInstanceOf(Post::class, $results->first());
        $this->assertCount(1, $results);
        $this->assertEquals('My Company Of One Story - Episode 2 Motivation', $results->first()->title);
    }

    /** @test * */
    public function it_paginates_post(): void
    {
        Storage::fake('posts');

        PostFactory::new()
            ->createMultiple(30);

        $pageOnePosts = PostCollector::paginate(15, 1);
        $this->assertCount(15, $pageOnePosts);
        $this->assertEquals('My Blog Title 30', $pageOnePosts->first()->title);

        $this->assertCount(15, PostCollector::paginate(15, 2));
    }

    /** @test */
    public function it_counts_posts(): void
    {
        Storage::fake('posts');

        PostFactory::new()
            ->createMultiple(5);

        $this->assertEquals(5, PostCollector::count());
    }

}
