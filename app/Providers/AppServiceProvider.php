<?php

namespace App\Providers;

use App\Post\Post;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\ServiceProvider;
use Spatie\YamlFrontMatter\YamlFrontMatter;

class AppServiceProvider extends ServiceProvider
{

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Collection::macro('mapFileNamesToPosts', function () {
            return $this->map(function ($fileName) {
                $filePath = Storage::disk('posts')
                        ->getAdapter()
                        ->getPathPrefix().$fileName;

                $postMetaData = YamlFrontMatter::parse(file_get_contents($filePath));
                [
                    $date,
                    $slug,
                ] = explode('.', $fileName);

                $parsedown = new \Parsedown();

                return new Post([
                    'path' => $filePath,
                    'title' => $postMetaData->matter('title'),
                    'categories' => explode(', ', $postMetaData->matter('categories')),
                    'content' => $parsedown->text($postMetaData->body()),
                    'date' => $date,
                    'slug' => $slug,
                    'summary' => $postMetaData->matter('summary'),
                ]);
            });
        });
    }
}
