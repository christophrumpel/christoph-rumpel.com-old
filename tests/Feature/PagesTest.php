<?php

namespace Tests\Features;

use Illuminate\Foundation\Testing\TestCase;
use Tests\CreatesApplication;

class PagesTest extends TestCase
{
    use CreatesApplication;

    public function test_it_displays_the_home_page()
    {
        $this->get('/')->assertStatus(200);
    }

    public function test_it_displays_the_talks()
    {
        $this->get('/talks')->assertStatus(200);
    }

    public function test_it_displays_the_newsletter()
    {
        $this->get('/newsletter')->assertStatus(200);
    }

    public function test_it_displays_a_post_page()
    {
        $this->get('/2018/02/botman-build-a-chatbot-video-course')->assertStatus(200);
    }

    public function test_it_display_main_category_pages()
    {
        $this->get('/category/chatbots')->assertStatus(200);
        $this->get('/category/laravel')->assertStatus(200);
        $this->get('/category/general')->assertStatus(200);
    }

    public function test_it_displays_an_error_page()
    {
        $this->get('/not-existing-content')->assertStatus(404);
    }

    public function test_it_displays_newsletterchatbot_policy_page()
    {
        $this->get('/policy-newsletterchatbot')->assertStatus(200);
    }

    public function test_it_displays_blog_privacy_policy_page()
    {
        $this->get('/privacy-policy')->assertStatus(200);
    }

    public function test_it_displays_book_newsletter_confirm_page()
    {
        $this->get('/build-chatbots-with-php-newsletter-confirm')->assertStatus(200);
    }

    public function test_it_displays_book_newsletter_success_page()
    {
        $this->get('/build-chatbots-with-php-newsletter-success')->assertStatus(200);
    }

    public function test_it_displays_blog_newsletter_confirm_page()
    {
        $this->get('/newsletter-confirm')->assertStatus(200);
    }

    public function test_it_displays_blog_newsletter_success_page()
    {
        $this->get('/newsletter-success')->assertStatus(200);
    }
}
