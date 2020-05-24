<?php

namespace Tests\Feature;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Tests\Factories\PostFactory;
use Tests\TestCase;

class PagePostTest extends TestCase
{

    /** @test * */
    public function it_shows_a_specific_post(): void
    {
        Storage::fake('posts');

        PostFactory::new()
            ->title('My Company Of One Story - Episode 3 The Transition')
            ->content('My blog content')
            ->categories(['Business'])
            ->create();

        $this->get('2020/03/my-company-of-one-story-episode-3-the-transition')
            ->assertSuccessful()
            ->assertSee('My Company Of One Story - Episode 3 The Transition')
            ->assertSee('Business')
            ->assertSee('My blog content');
    }

}
