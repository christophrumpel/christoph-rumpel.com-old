<?php

namespace App\View\Components;

use App\Post\Post;
use Illuminate\View\Component;
use Illuminate\View\View;

class MainLayout extends Component
{

    public $post;

    public function __construct($post = null)
    {
        $this->post = $post;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return View|string
     */
    public function render()
    {
        return view('layouts.main');
    }
}
