<?php

namespace App\Content;

use Carbon\Carbon;
use Symfony\Component\Yaml\Yaml;
use Illuminate\Support\Collection;

class Talks extends Provider
{
    public function future(): Collection
    {
        return $this->cache('talks-future', function () {
            $talks = Yaml::parse($this->disk->get('talks-future.yaml'));

            return collect($talks)->map(function ($talk) {
                $talk = (object)$talk;
                $talk->date = Carbon::createFromFormat('d.m.Y', $talk->date)->toFormattedDateString();

                return $talk;
            });
        });
    }

    public function past(): Collection
    {
        return $this->cache('talks-past', function () {
            $talks = Yaml::parse($this->disk->get('talks-past.yaml'));

            return collect($talks)->map(function ($talk) {
                $talk = (object)$talk;
                $talk->date = Carbon::createFromFormat('d.m.Y', $talk->date)->toFormattedDateString();

                return $talk;
            });
        });
    }
}