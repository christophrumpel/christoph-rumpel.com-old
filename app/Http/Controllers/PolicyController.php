<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;

class PolicyController extends Controller
{
    public function blog()
    {
        return view('policies.blog');
    }

    public function lca()
    {
        return view('policies.lca');
    }

    public function newsletterChatbot()
    {
        return view('policies.newsletterChatbot');
    }
}
