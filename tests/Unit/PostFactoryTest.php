<?php

namespace Tests\Unit;

use App\Post\Post;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use Tests\Factories\PostFactory;

class PostFactoryTest extends \Tests\TestCase
{

    private function getPostFile(string $slug): string
    {
        return Storage::disk('posts')
            ->get(Carbon::today()
                    ->format('Y-m-d').".$slug.md");
    }

    /** @test * */
    public function it_creates_new_post_file(): void
    {
        Storage::fake('posts');

        $postPath = PostFactory::new()
            ->create();

        $this->assertFileExists($postPath);
    }

    /** @test * */
    public function it_sets_the_post_title(): void
    {
        Storage::fake('posts');

        $postPath = PostFactory::new()
            ->title('My Blog Title')
            ->create();

        $this->assertStringContainsString('my-blog-title.md', $postPath);
        $this->assertStringContainsString('My Blog Title', $this->getPostFile('my-blog-title'));
    }

    /** @test * */
    public function it_sets_the_post_categories(): void
    {
        Storage::fake('posts');

        $postPath = PostFactory::new()
            ->categories([
                'Laravel',
                'Testing',
            ])
            ->create();

        $this->assertStringContainsString('my-blog-title.md', $postPath);
        $this->assertStringContainsString('My Blog Title', $this->getPostFile('my-blog-title'));
    }

    /** @test * */
    public function it_sets_the_post_content(): void
    {
        Storage::fake('posts');

        PostFactory::new()
            ->content('content')
            ->create();

        $this->assertStringContainsString('content', $this->getPostFile('my-blog-title'));
    }

    /** @test * */
    public function it_creates_multiple_post_files(): void
    {
        Storage::fake('posts');

        $posts = PostFactory::new()
            ->createMultiple(3);

        $this->assertFileExists($posts[0]);
        $this->assertFileExists($posts[1]);
        $this->assertFileExists($posts[2]);
    }
}
