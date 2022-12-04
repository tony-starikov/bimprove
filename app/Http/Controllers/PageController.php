<?php

namespace App\Http\Controllers;

use App\Models\Page;

class PageController extends Controller
{
    public function main()
    {
        $page_info = Page::where('name', 'main')->first();

        return view('main', compact('page_info'));
    }

    public function blog()
    {
        $page_info = Page::where('name', 'blog')->first();

        return view('blog', compact('page_info'));
    }
}
