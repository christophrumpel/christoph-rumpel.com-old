<?php

namespace App\Content;

use Carbon\Carbon;
use Illuminate\Support\Collection;
use Spatie\YamlFrontMatter\YamlFrontMatter;

class Posts extends Provider
{
    /**
     * @return Collection
     */
    public function all()
    {
        $posts = $this->cache('posts.all', function () {
            return $this->gather();
        });

        return $posts->each(function ($post) {
            $date = Carbon::parse($post->date);
            $post->dateShort = $date->format('F Y');
        });
    }

    /**
     * @return Collection
     */
    public function published()
    {
        return $this->all()
            ->filter(function ($post) {
                return $post->published ==! false;
            });
    }

    /**
     * @param int $perPage
     * @param string $pageName
     * @param null $page
     * @return Collection
     */
    public function paginate($perPage = 15, $pageName = 'page', $page = null)
    {
        return $this->cache('posts.paginate.'.request('page', 1), function () use ($perPage, $pageName, $page) {
            return $this->all()
                ->simplePaginate($perPage, $pageName, $page);
        });
    }

    public function find($year, $slug)
    {
        return $this->all()
            ->first(function ($post) use ($year, $slug) {
                return $post->date->year == $year && $post->slug == $slug;
            }, function () {
                abort(404);
            });
    }

    public function category($category)
    {
        return $this->published()
            ->filter(function ($article) use ($category) {
                return trim(strtolower($article->category)) === trim(strtolower($category));
            });
    }

    public function feed()
    {
        return $this->cache('posts.feed', function () {
            return $this->published()
                ->map(function ($post) {
                    return [
                        'id' => $post->url,
                        'title' => $post->title,
                        'updated' => $post->date,
                        'summary' => $post->contents,
                        'link' => $post->url,
                        'author' => 'Christoph Rumpel',
                    ];
                });
        });
    }

    /**
     * Get all articles and parse them to objects
     *
     * @return static
     */
    private function gather()
    {
        return collect($this->disk->files('posts'))
            ->filter(function ($path) {
                return ends_with($path, '.md');
            })
            ->map(function ($path) {
                $filename = str_after($path, 'posts/');
                [$date, $slug, $extension] = explode('.', $filename, 3);
                $date = Carbon::createFromFormat('Y-m-d', $date);
                $document = YamlFrontMatter::parse($this->disk->get($path));

                return (object) [
                    'path' => $path,
                    'date' => $date,
                    'slug' => $slug,
                    'url' => route('posts.show', [$date->format('Y'), $date->format('m'), $slug]),
                    'external_url' => $document->external_url ?? false,
                    'title' => $document->title,
                    'category' => $document->category ?? 'general',
                    'contents' => markdown($document->body()),
                    'summary' => markdown($document->summary ?? $document->body()),
                    'summary_short' => mb_strimwidth($document->summary ?? $document->body(), 0, 140, "..."),
                    'preview_image' => $document->preview_image ? route('home').'/'.$document->preview_image : 'https://christoph-rumpel.com/images/cr_image_v3.jpg',
                    'preview_image_twitter' => route('home').'/'.$document->preview_image_twitter ?? '',
                    'published' => $document->published ?? true,
                ];
            })
            ->sortByDesc('date');
    }
}
