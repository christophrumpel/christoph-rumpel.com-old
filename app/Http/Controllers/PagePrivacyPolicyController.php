<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagePrivacyPolicyController extends Controller
{
    public function __invoke(Request $request)
    {
        return view('pages.privacy-policy');
    }
}
