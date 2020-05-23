<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class PageResponseTest extends TestCase
{

    use RefreshDatabase;

    /** @test * */
    public function it_gives_successful_response_for_homepage(): void
    {

       $this->get('/')
            ->assertSuccessful();
    }
}
