<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class NewsletterController extends Controller
{
    public function index() {
        return view('newsletter.index');
    }

    public function confirm()
    {
        return view('newsletter.confirm');
    }

    public function success()
    {
        return view('newsletter.success');
    }
}
