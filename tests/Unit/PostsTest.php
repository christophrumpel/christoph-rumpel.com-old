<?php

namespace Tests\Unit;

use App\Content\Post;
use Illuminate\Filesystem\FilesystemManager;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Tests\CreatesApplication;
use Tests\TestCase;

class PostsTest extends Testcase
{

    use CreatesApplication;

    protected function setUp()
    {
        parent::setUp();
        Storage::fake('content');
    }

    /**
     * @test
     **/
    public function it_gets_all_posts()
    {
        // Given
        $post = new Post;
        $this->createBlogPost();
        $this->createBlogPost('2');
        $this->createUnpublishedBlogPost();

        // When
        $posts = $post->all();

        // Then
        $this->assertEquals(3, $posts->count());
    }

    /**
     * @test
     **/
    public function it_gets_all_published_posts()
    {
        // Given
        $post = new Post;
        $this->createBlogPost();
        $this->createBlogPost('2');
        $this->createUnpublishedBlogPost();

        // When
        $posts = $post->published();

        // Then
        $this->assertEquals(2, $posts->count());
    }

    /**
     * @test
     **/
    public function it_finds_post()
    {
        // Given
        $post = new Post;
        $this->createBlogPost();

        // When
        $post = $post->find('2018', 'post1');

        // Then
        $this->assertNotNull($post);
    }

    /**
     * @test
     **/
    public function it_throws_an_exception_for_not_given_post()
    {
        // Given
        $posts = new Post;
        $this->createBlogPost();

        // Then
        $this->expectException(NotFoundHttpException::class);

        // When
        $posts->find('2018', 'postNotGiven');
    }

    /**
     * @test
     **/
    public function it_creates_post_object_from_markdown()
    {
        // Given
        $post = new Post;
        $this->createBlogPost();

        // When
        $post = $post->find('2018', 'post1');

        // Then
        $this->assertEquals('Blog Post Title 1', $post->title);
        $this->assertEquals('category1', $post->category);
        $this->assertEquals("<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed!</p>\n",
            $post->summary);
        $this->assertEquals("Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, ...",
            $post->summary_short);
        $this->assertEquals(route('home').'/preview_image.png', $post->preview_image);
        $this->assertEquals(route('home').'/preview_image_twitter.png', $post->preview_image_twitter);
        $this->assertTrue($post->published);
        $this->assertFalse($post->external_url);
        $this->assertEquals(Carbon::createFromFormat('Y-m-d', '2018-01-17'), $post->date);
        $this->assertEquals('posts/2018-01-17.post1.md', $post->path);
        $this->assertEquals(route('posts.show', ['2018', '01', 'post1']), $post->url);

    }

}