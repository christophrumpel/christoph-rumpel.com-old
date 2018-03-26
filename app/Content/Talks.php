<?php

namespace App\Content;

use Carbon\Carbon;
use Symfony\Component\Yaml\Yaml;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Storage;

class Talks
{
    public function future(): Collection
    {
        return Cache::get('talks-future', function () {
            $talks = Yaml::parse(Storage::disk('content')->get('talks-future.yaml'));

            return collect($talks)->map(function ($talk) {
                $talk = (object)$talk;
                $talk->date = Carbon::createFromFormat('d.m.Y', $talk->date)->toFormattedDateString();

                return $talk;
            });
        });
    }

    public function past(): Collection
    {
        return Cache::get('talks-past', function () {
            $talks = Yaml::parse(Storage::disk('content')->get('talks-past.yaml'));

            return collect($talks)->map(function ($talk) {
                $talk = (object)$talk;
                $talk->date = Carbon::createFromFormat('d.m.Y', $talk->date)->toFormattedDateString();

                return $talk;
            });
        });
    }
}