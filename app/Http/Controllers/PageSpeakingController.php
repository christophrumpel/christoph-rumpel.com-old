<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PageSpeakingController extends Controller
{

    public function __invoke(Request $request)
    {
        $talks = json_decode(Storage::disk('talks')->get('talks.json'));

        return view('pages.speaking', ['talks' => $talks]);
    }
}
