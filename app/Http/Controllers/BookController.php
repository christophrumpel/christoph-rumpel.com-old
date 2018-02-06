<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;

class BookController extends Controller
{
    public function index()
    {
        return view('book.index');
    }
}
