<?php

namespace Tests\Unit;

use App\Content\Posts;
use Illuminate\Filesystem\FilesystemManager;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Tests\CreatesApplication;
use Tests\TestCase;

class PostsTest extends Testcase {

    use CreatesApplication;

    protected function setUp()
    {
        parent::setUp();
        Storage::fake('contentFake');
    }

    /**
     * @test
     **/
    public function it_gets_all_posts()
    {
    	// Given
    	$posts = new Posts(Cache::driver(), new FilesystemManager(app()));
    	$posts->setDisk(Storage::disk('contentFake'));

    	// When
        $this->createBlogPost('contentFake');
        $this->createBlogPost('contentFake', '2');
        $this->createUnpublishedBlogPost('contentFake');

    	// Then
        $this->assertEquals(3, $posts->all()->count());
    }

    /**
     * @test
     **/
    public function it_gets_all_published_posts()
    {
        // Given
        $posts = new Posts(Cache::driver(), new FilesystemManager(app()));
        $posts->setDisk(Storage::disk('contentFake'));

        // When
        $this->createBlogPost('contentFake');
        $this->createBlogPost('contentFake', '2');
        $this->createUnpublishedBlogPost('contentFake');

        // Then
        $this->assertEquals(2, $posts->published()->count());
    }

    /**
     * @test
     **/
    public function it_finds_post()
    {
        // Given
        $posts = new Posts(Cache::driver(), new FilesystemManager(app()));
        $posts->setDisk(Storage::disk('contentFake'));

        // When
        $this->createBlogPost('contentFake');

        // Then
        $this->assertNotNull($posts->find('2018', 'post1'));
    }

    /**
     * @test
     **/
    public function it_throws_an_exception_for_not_given_post()
    {
        // Given
        $posts = new Posts(Cache::driver(), new FilesystemManager(app()));
        $posts->setDisk(Storage::disk('contentFake'));

        // When
        $this->createBlogPost('contentFake');

        // Then
        $this->expectException(NotFoundHttpException::class);
        $posts->find('2018', 'postNotGiven');
    }

}