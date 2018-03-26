<?php

namespace App\Http\Controllers;

use App\Content\Post;
use Carbon\Carbon;
use Illuminate\Routing\Controller;

class HomeController
{
    public function index(Post $posts)
    {
        $posts = $posts->published()->simplePaginate(3);

        return view('home.index', [
            'posts' => $posts,
        ]);
    }
}
