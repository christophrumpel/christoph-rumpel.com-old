<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageBcwpController extends Controller
{
    public function __invoke(Request $request)
    {
        return view('pages.bcwp');
    }
}
