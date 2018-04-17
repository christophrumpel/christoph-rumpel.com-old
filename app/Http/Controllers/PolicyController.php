<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;

class PolicyController extends Controller
{
    public function newsletterChatbot()
    {
        return view('policies.newsletterChatbot');
    }
}
