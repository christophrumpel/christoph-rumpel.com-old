<?php

namespace Tests\Factories;

use Illuminate\Support\Facades\Storage;

class TalkFactory
{
    public static function create(array $talks): void
    {
        Storage::fake('talks');

        Storage::disk('talks')->put('talks.json', json_encode($talks));
    }
}
