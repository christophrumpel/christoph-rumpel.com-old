<?php

namespace Tests\Features;

use Illuminate\Foundation\Testing\TestCase;
use Tests\CreatesApplication;

class HeaderTest extends TestCase
{
    use CreatesApplication;

    /**
     * @test
     **/
    public function csp_header_is_given()
    {
        $this->get('/')->assertHeader('content-security-policy');
    }
}
