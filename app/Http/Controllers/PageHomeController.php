<?php

namespace App\Http\Controllers;


use App\Post\PostCollector;

class PageHomeController extends Controller
{
    public function __invoke()
    {
        $posts = PostCollector::all();

        dd($posts);

        return view('pages.home', ['posts' => $posts]);
    }
}
