<?php

namespace App\Http\Controllers;



class PageHomeController extends Controller
{
    public function __invoke()
    {
        return view('pages.home');
    }
}
