<?php

namespace App\Post;

use Illuminate\Support\Facades\Storage;
use Spatie\YamlFrontMatter\YamlFrontMatter;
use League\CommonMark\Block\Element\FencedCode;
use League\CommonMark\Block\Element\IndentedCode;
use League\CommonMark\CommonMarkConverter;
use League\CommonMark\Environment;
use Spatie\CommonMarkHighlighter\FencedCodeRenderer;
use Spatie\CommonMarkHighlighter\IndentedCodeRenderer;

class FileToPostMapper
{

    public static function map(string $fileName): Post
    {
        $filePath = Storage::disk('posts')
                ->getAdapter()
                ->getPathPrefix().$fileName;

        $postMetaData = YamlFrontMatter::parse(file_get_contents($filePath));
        [
            $date,
            $slug,
        ] = explode('.', $fileName);

        $environment = Environment::createCommonMarkEnvironment();
        $environment->addBlockRenderer(FencedCode::class, new FencedCodeRenderer());
        $environment->addBlockRenderer(IndentedCode::class, new IndentedCodeRenderer());

        $commonMarkConverter = new CommonMarkConverter([], $environment);

        return new Post([
            'path' => $filePath,
            'title' => $postMetaData->matter('title'),
            'categories' => explode(', ', strtolower($postMetaData->matter('categories'))),
            'preview_image' => $postMetaData->matter('preview_image'),
            'preview_image_twitter' => $postMetaData->matter('preview_image_twitter'),
            'content' => $commonMarkConverter->convertToHtml($postMetaData->body()),
            'date' => $date,
            'slug' => $slug,
            'summary' => $postMetaData->matter('summary'),
        ]);
    }
}
