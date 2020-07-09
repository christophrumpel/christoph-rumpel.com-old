<?php

namespace Tests\Feature;

use App\Post\PostCollector;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Storage;
use Livewire\Livewire;
use Tests\Factories\PostFactory;
use Tests\TestCase;

class LiveWirePostListTest extends TestCase
{

    /** @test * */
    public function it_shows_posts_per_page(): void
    {
        Storage::fake('posts');

        PostFactory::new()
            ->createMultiple(30);

        Livewire::test('post-list',)
            ->assertSee('Blog Title 30')
            ->assertDontSee('Blog Title 15')
            ->call('nextPage')
            ->assertDontSee('Blog Title 30')
            ->assertSee('Blog Title 15')
            ->assertSee('Blog Title 1')
            ->call('previousPage')
            ->assertSee('Blog Title 30')
            ->assertDontSee('Blog Title 15');
    }

    /** @test **/
    public function it_shows_post_pagination_during_browsing(): void
    {
        Storage::fake('posts');

        PostFactory::new()
            ->createMultiple(30);


        Livewire::test('post-list',)
            ->assertSee('Next')
            ->assertDontSee('Previous')
            ->call('nextPage')
            ->assertDontSee('Next')
            ->assertSee('Previous');

    }

    /** @test **/
    public function it_resets_pagination_after_search(): void
    {
        Storage::fake('posts');

        PostFactory::new()
            ->createMultiple(100);


        Livewire::test('post-list',)
            ->call('nextPage')
            ->assertSet('currentPage', 2)
            ->set('searchTerm', 'laravel')
            ->assertDontSee('Next')
            ->set('searchTerm', '')
            ->assertSee('Next')
            ->assertSet('currentPage', 1);
    }
}
