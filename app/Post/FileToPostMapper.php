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
            'categories' => explode(', ', $postMetaData->matter('categories')),
            //'content' => $parsedown->text($postMetaData->body()),
            'content' => $commonMarkConverter->convertToHtml($postMetaData->body()),
            'date' => $date,
            'slug' => $slug,
            'summary' => $postMetaData->matter('summary'),
        ]);
    }
}
