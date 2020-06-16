<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageUsesController extends Controller
{
    public function __invoke(Request $request)
    {
        return view('pages.uses');
    }
}
