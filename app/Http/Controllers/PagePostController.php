<?php

namespace App\Http\Controllers;

use App\Post\PostCollector;
use Illuminate\Http\Request;

class PagePostController extends Controller
{

    public function __invoke(Request $request, int $year, int $month, string $slug)
    {
        $post = PostCollector::find($slug);

        return view('pages.post', ['post' => $post]);
    }
}
