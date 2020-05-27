<?php

namespace Tests\Feature;

use Illuminate\Support\Facades\Storage;
use Tests\Factories\PostFactory;
use Tests\TestCase;

class PageCategoryTest extends TestCase
{

    /** @test * */
    public function it_shows_post_only_from_one_category(): void
    {
        $this->withoutExceptionHandling();
        Storage::fake('posts');

        PostFactory::new()
            ->categories(['business'])
            ->title('My Business')
            ->create();

        PostFactory::new()
            ->categories(['laravel'])
            ->title('My Laravel')
            ->create();


        $this->get('category/business')
            ->assertSuccessful()
            ->assertSee('My Business')
            ->assertDontSee('My Laravel');
    }
}
