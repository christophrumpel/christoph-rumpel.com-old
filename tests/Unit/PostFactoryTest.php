<?php

namespace Tests\Unit;

use App\Post\Post;
use Illuminate\Support\Facades\Storage;
use Tests\Factories\PostFactory;

class PostFactoryTest extends \Tests\TestCase
{

   /** @test **/
   public function it_creates_new_post_file(): void
   {
        Storage::fake('posts');

        $postPath = PostFactory::new()
            ->create();

       $this->assertFileExists($postPath);
   }

    /** @test **/
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
