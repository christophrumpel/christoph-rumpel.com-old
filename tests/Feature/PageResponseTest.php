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
        $this->withoutExceptionHandling();
       $this->get('/')
            ->assertSuccessful();
    }

    /** @test * */
    public function it_gives_successful_response_for_privacy_policy_page(): void
    {
        $this->withoutExceptionHandling();
        $this->get('/privacy-policy')
            ->assertSuccessful();
    }

    /** @test * */
    public function it_gives_successful_response_for_privacy_policy_lca_page(): void
    {
        $this->withoutExceptionHandling();
        $this->get('/privacy-policy-lca')
            ->assertSuccessful();
    }

    /** @test * */
    public function it_gives_successful_response_for_uses_page(): void
    {
        $this->withoutExceptionHandling();
        $this->get('/uses')
            ->assertSuccessful();
    }

    /** @test * */
    public function it_gives_successful_response_for_bcwp_page(): void
    {
        $this->withoutExceptionHandling();
        $this->get('build-chatbots-with-php')
            ->assertSuccessful();
    }
}
