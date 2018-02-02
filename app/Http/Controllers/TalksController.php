<?php

namespace App\Http\Controllers;

use App\Content\Talks;

class TalksController
{
    public function index(Talks $talks)
    {
        return view('talks.index', ['talks' => $talks->all()]);
    }
}
