<?php

namespace Tests\Unit;

use Illuminate\Support\Facades\Storage;
use Tests\Factories\TalkFactory;
use Tests\TestCase;

class TalkFactoryTest extends TestCase
{

    /** @test **/
    public function it_creates_talks_file(): void
    {
        Storage::fake('talks');

        $talks = [
            [
                'title' => 'Talk Title',
                'location' => 'Talk Location',
                'event' => 'Event Name'
            ],
            [
                'title' => 'Talk Title 2',
                'location' => 'Talk Location 2',
                'event' => 'Event Name 2'
            ]
        ];

    	TalkFactory::create($talks);

    	Storage::disk('talks')->assertExists('talks.json');
    	$this->assertEquals($talks, json_decode(Storage::disk('talks')
            ->get('talks.json'), true));
    }
}
