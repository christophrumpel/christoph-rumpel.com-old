<?php

namespace Tests\Unit;

use Illuminate\Support\Facades\Storage;
use PHPUnit\Framework\TestCase;
use Tests\Factories\PostFactory;

class PostFactoryTest extends \Tests\TestCase
{

   /** @test **/
   public function it_creates_new_post_file(): void
   {
        Storage::fake('posts');

        $post = PostFactory::new()
            ->create();

       $this->assertFileExists($post->destination);
       $this->assertEquals('Dummy 1', $post->title);
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
