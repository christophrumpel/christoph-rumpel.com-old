<?php

namespace App\Http\Controllers;

use App\Content\Posts;
use Carbon\Carbon;
use Illuminate\Routing\Controller;

class HomeController
{
    public function index(Posts $posts)
    {
        $posts = $posts->all()->simplePaginate(3);

        $posts->each(function($post) {
            $date = Carbon::parse($post->date);
            $post->date = $date->format('F Y');
        });

        return view('home.index', [
            'posts' => $posts,
        ]);
    }
}
