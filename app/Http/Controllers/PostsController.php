<?php

namespace App\Http\Controllers;

use App\Content\Post;
use Illuminate\Support\Facades\App;

class PostsController
{
    public function index(Post $posts)
    {
        return view('posts.index', [
            'paginator' => $posts->paginate(20),
        ]);
    }

    public function page($page, Post $posts)
    {
        return view('posts.index', [
            'paginator' => $posts->paginate(20, 'page', $page),
        ]);
    }

    public function show($year, $month, $slug, Post $posts)
    {
        $post = $posts->find($year, $slug);

        return view('posts.show', [
            'post' => $post,
        ]);
    }

    public function category($category, Post $posts)
    {
        return view('posts.category', ['posts' => $posts->category($category), 'category' => $category]);
    }
}
