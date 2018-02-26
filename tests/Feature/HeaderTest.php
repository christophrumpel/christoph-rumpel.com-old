<?php

namespace Tests\Features;

use Tests\CreatesApplication;
use Illuminate\Foundation\Testing\TestCase;

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
