<?php

namespace App\Http\Controllers;

use App\Content\Posts;
use Illuminate\Support\Facades\App;

class PostsController
{
    public function index(Posts $posts)
    {
        return view('posts.index', [
            'paginator' => $posts->paginate(20),
        ]);
    }

    public function page($page, Posts $posts)
    {
        return view('posts.index', [
            'paginator' => $posts->paginate(20, 'page', $page),
        ]);
    }

    public function show($year, $month, $slug, Posts $posts)
    {
        $post = $posts->find($year, $slug);

        if($post->published === false && App::environment('production')) {
            return redirect()->route('home');
        }

        return view('posts.show', [
            'post' => $post,
        ]);
    }

    public function category($category, Posts $posts)
    {
    	return view('posts.category', ['posts' => $posts->category($category), 'category' => $category]);
    }
}
