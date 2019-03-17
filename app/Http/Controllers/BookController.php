<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;

class BookController extends Controller
{
    public function index()
    {
        return view('book.index');
    }

    public function newsletterConfirm()
    {
        return view('book.newsletter-confirm');
    }


    public function newsletterSuccess()
    {
        return view('book.newsletter-success');
    }
}
