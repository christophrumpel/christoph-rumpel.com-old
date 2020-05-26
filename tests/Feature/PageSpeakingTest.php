<?php

namespace Tests\Feature;

use Tests\Factories\TalkFactory;
use Tests\TestCase;

class PageSpeakingTest extends TestCase
{

    /** @test **/
    public function it_shows_upcoming_talks(): void
    {
        TalkFactory::create([
           [
               'title' => 'Talk Title',
               'date' => '20.02.2020',
               'location' => 'Talk Location',
               'event' => 'Event Name'
           ]
        ]);

    	$this->get('/speaking')
            ->assertSuccessful()
            ->assertSee('Talk Title')
            ->assertSee('20.02.2020')
            ->assertSee('Talk Location')
            ->assertSee('Event Name');
    }
}
