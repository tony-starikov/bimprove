<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\Post;
use App\Models\Service;

class PageController extends Controller
{
    public function main()
    {
        $page_info = Page::where('name', 'main')->first();

        $services = Service::all();

        return view('main', compact('page_info', 'services'));
    }
}
