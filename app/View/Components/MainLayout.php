<?php

namespace App\View\Components;

use App\Post\Post;
use Illuminate\View\Component;
use Illuminate\View\View;

class MainLayout extends Component
{

    public Post $post;

    public function __construct(Post $post)
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
