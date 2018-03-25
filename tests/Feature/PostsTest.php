<?php

namespace Tests\Unit;

use Illuminate\Support\Facades\Artisan;
use Tests\TestCase;
use Illuminate\Support\Facades\Storage;

class PagesTest extends TestCase
{

    public function setUp()
    {
        parent::setUp();
        Storage::fake('content');
    }

    /**
     * @test
     */
    public function it_shows_post_on_home()
    {
        $this->createBlogPost('content');

        $response = $this->get('/');
        $response->assertStatus(200);
        $response->assertSee('Blog Post Title 1');
        $response->assertSee('category1');
        $response->assertSee('Summary test');
        $response->assertSee('January 2018');
    }

    /**
     * @test
     */
    public function it_shows_multiple_posts_on_home()
    {
        $this->createBlogPost('content');
        $this->createBlogPost('content', '2');

        $response = $this->get('/');
        $response->assertStatus(200);
        $response->assertSee('Blog Post Title 1');
        $response->assertSee('Blog Post Title 2');

    }

    /**
     * @test
     */
    public function it_shows_post_on_detail_page()
    {
        $this->createBlogPost();

        $response = $this->get('/2018/1/post1');
        $response->assertStatus(200);
        $response->assertSee('Blog Post Title 1');
        $response->assertSee('content');
    }

    /**
     * @test
     */
    public function it_shows_posts_on_feed_page()
    {
        $this->createBlogPost();
        $this->createBlogPost('2');

        $response = $this->get('feed');
        $response->assertStatus(200);
        $response->assertSee('Blog Post Title 1');
        $response->assertSee('Blog Post Title 2');
    }

    /**
     * @test
     */
    public function it_does_not_show_unpublished_post_on_home()
    {
        $this->createUnpublishedBlogPost();

        $response = $this->get('/');
        $response->assertStatus(200);
        $response->assertDontSee('Unpublished Blog Post Title');
    }

    /**
     * @test
     */
    public function it_shows_unpublished_post_on_detail()
    {
        $this->createUnpublishedBlogPost();

        $response = $this->get('/2018/1/unpublished-post');
        $response->assertStatus(200);
        $response->assertSee('Unpublished Blog Post Title');
    }

    /**
     * @test
     */
    public function it_paginates_posts_on_home()
    {
        $this->createBlogPost('1');
        $this->createBlogPost('2');
        $this->createBlogPost('3');
        $this->createBlogPost('4');

        $response = $this->get('/');
        $response->assertStatus(200);
        $response->assertSee('Blog Post Title 1');
        $response->assertSee('Blog Post Title 2');
        $response->assertSee('Blog Post Title 3');
        $response->assertDontSee('Blog Post Title 4');

        $response = $this->get('/?page=2');
        $response->assertDontSee('Blog Post Title 1');
        $response->assertDontSee('Blog Post Title 2');
        $response->assertDontSee('Blog Post Title 3');
        $response->assertSee('Blog Post Title 4');
    }

    /**
     * @test
     */
    public function it_does_not_show_unpublished_post_on_feed()
    {
        $this->createUnpublishedBlogPost();

        $response = $this->get('/feed');
        $response->assertStatus(200);
        $response->assertDontSee('Unpublished Blog Post Title');
    }

    /**
     * @test
     */
    public function it_sets_default_category()
    {
        Storage::disk('content')
            ->put('/posts/2018-01-17.post.md',
                file_get_contents(base_path('tests/fixtures/blog-post-without-category.md')));

        $response = $this->get('/');
        $response->assertStatus(200);
        $response->assertSee('general');
    }
}