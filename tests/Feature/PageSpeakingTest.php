<?php

namespace Tests\Feature;

use Tests\Factories\TalkFactory;
use Tests\TestCase;

class PageSpeakingTest extends TestCase
{

    /** @test * */
    public function it_shows_upcoming_talks(): void
    {
        TalkFactory::create([
            'upcoming' => [
                [
                    'title' => 'Talk Title',
                    'date' => '20.02.2020',
                    'location' => 'Talk Location',
                    'event' => 'Event Name',
                ],
                [
                    'title' => 'Talk Title 2',
                    'date' => '21.02.2020',
                    'location' => 'Talk Location 2',
                    'event' => 'Event Name 2',
                ],
            ],
            'past' => [
                [
                    'title' => 'Talk Title',
                    'date' => '20.02.2020',
                    'location' => 'Talk Location',
                    'event' => 'Event Name',
                ],
                [
                    'title' => 'Talk Title 2',
                    'date' => '21.02.2020',
                    'location' => 'Talk Location 2',
                    'event' => 'Event Name 2',
                ],
            ],
        ]);

        $this->get('/speaking')
            ->assertSuccessful()
            ->assertSee('Talk Title')
            ->assertSee('20.02.2020')
            ->assertSee('Talk Location')
            ->assertSee('Event Name')
            ->assertSee('Talk Title 2')
            ->assertSee('21.02.2020')
            ->assertSee('Talk Location 2')
            ->assertSee('Event Name 2')
            ->assertSee('Talk Title')
            ->assertSee('20.02.2020')
            ->assertSee('Talk Location')
            ->assertSee('Event Name')
            ->assertSee('Talk Title 2')
            ->assertSee('21.02.2020')
            ->assertSee('Talk Location 2')
            ->assertSee('Event Name 2');
    }

    /** @test **/
    public function it_works_with_no_upcoming_talks(): void
    {
        TalkFactory::create([
            'upcoming' => [],
            'past' => [
                [
                    'title' => 'Talk Title',
                    'date' => '20.02.2020',
                    'location' => 'Talk Location',
                    'event' => 'Event Name',
                ],
            ],
        ]);

        $this->get('/speaking')
            ->assertSuccessful();

    }
}
