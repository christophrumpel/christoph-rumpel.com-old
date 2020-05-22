<?php

namespace Tests\Unit;

use Illuminate\Support\Facades\Storage;
use Tests\TestCase;

class PostsTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();
        Storage::fake('content');
    }

    /**
     * @test
     */
    public function it_shows_post_on_home()
    {
        // Given
        $this->createBlogPost();

        // When
        $response = $this->get('/');

        // Then
        $response->assertStatus(200);
        $response->assertSee('Blog Post Title 1');
        $response->assertSee('category1');
        $response->assertSee('Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, ...');
        $response->assertSee('January 2018');
    }

    /**
     * @test
     */
    public function it_shows_multiple_posts_on_home()
    {
        // Given
        $this->createBlogPost();
        $this->createBlogPost('2');

        // When
        $response = $this->get('/');

        // Then
        $response->assertStatus(200);
        $response->assertSee('Blog Post Title 1');
        $response->assertSee('Blog Post Title 2');
    }

    /**
     * @test
     */
    public function it_shows_post_on_detail_page()
    {
        // Given
        $this->createBlogPost();

        // When
        $response = $this->get('/2018/1/post1');

        // Then
        $response->assertStatus(200);
        $response->assertSee('Blog Post Title 1');
        $response->assertSee('content');
    }

    /**
     * @test
     */
    public function it_shows_posts_on_feed_page()
    {
        // Given
        $this->createBlogPost();
        $this->createBlogPost('2');

        // When
        $response = $this->get('feed');

        // Then
        $response->assertStatus(200);
        $response->assertSee('Blog Post Title 1');
        $response->assertSee('Blog Post Title 2');
    }

    /**
     * @test
     */
    public function it_does_not_show_unpublished_post_on_home()
    {
        // Given
        $this->createUnpublishedBlogPost();

        // When
        $response = $this->get('/');

        // Then
        $response->assertStatus(200);
        $response->assertDontSee('Unpublished Blog Post Title');
    }

    /**
     * @test
     */
    public function it_shows_unpublished_post_on_detail()
    {
        // Given
        $this->createUnpublishedBlogPost();

        // When
        $response = $this->get('/2018/1/unpublished-post');

        // Then
        $response->assertStatus(200);
        $response->assertSee('Unpublished Blog Post Title');
    }

    /**
     * @test
     */
    public function it_paginates_posts_on_home()
    {
        // Given
        $this->createBlogPost('1');
        $this->createBlogPost('2');
        $this->createBlogPost('3');
        $this->createBlogPost('4');

        // When
        $response = $this->get('/');

        // Then
        $response->assertStatus(200);
        $response->assertSee('Blog Post Title 1');
        $response->assertSee('Blog Post Title 2');
        $response->assertSee('Blog Post Title 3');
        $response->assertDontSee('Blog Post Title 4');

        // When
        $response = $this->get('/?page=2');

        // Then
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
        // Given
        $this->createUnpublishedBlogPost();

        // When
        $response = $this->get('/feed');

        // Then
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
