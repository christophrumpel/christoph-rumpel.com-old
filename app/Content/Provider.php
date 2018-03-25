<?php

namespace App\Content;

use Illuminate\Contracts\Cache\Repository as Cache;
use Illuminate\Contracts\Filesystem\Factory as Filesystem;

abstract class Provider
{
    /** @var \Illuminate\Contracts\Cache\Repository */
    protected $cache;

    /** @var \Illuminate\Contracts\Filesystem\Factory  */
    protected $disk;

    public function __construct(Cache $cache, Filesystem $filesystem)
    {
        $this->cache = $cache;
        $this->disk = $filesystem->disk('content');
    }

    public function setDisk($disk)
    {
        $this->disk = $disk;
    }

    protected function cache(string $key, callable $callback)
    {
        return $this->cache->rememberForever("content:{$key}", $callback);
    }
}
