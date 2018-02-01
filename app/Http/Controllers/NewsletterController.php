<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class NewsletterController extends Controller
{
    public function index() {
        return view('newsletter.index');
    }
}
