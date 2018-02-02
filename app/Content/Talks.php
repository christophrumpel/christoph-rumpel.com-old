<?php

namespace App\Content;

use Carbon\Carbon;
use Symfony\Component\Yaml\Yaml;
use Illuminate\Support\Collection;

class Talks extends Provider
{
    public function all(): Collection
    {
        return $this->cache('talks', function () {
            $talks = Yaml::parse($this->disk->get('talks.yaml'));

            return collect($talks)->map(function ($talk) {
                $talk = (object)$talk;
                $talk->date = Carbon::createFromFormat('d.m.Y', $talk->date)->toFormattedDateString();

                return $talk;
            });
        });
    }
}