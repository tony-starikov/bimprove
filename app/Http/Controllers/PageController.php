<?php

namespace App\Http\Controllers;

use App\Models\Achievement;
use App\Models\Page;
use App\Models\Post;
use App\Models\Service;
use App\Models\Star;
use App\Models\Teammate;

class PageController extends Controller
{
    public function main()
    {
        $page_info = Page::where('name', 'main')->first();

        $services = Service::all();

        $achievements = Achievement::all();

        $stars = Star::all();

        $teammates = Teammate::all();

        return view('main', compact('page_info', 'services', 'achievements', 'stars', 'teammates'));
    }

    public function contact()
    {
        $page_info = Page::where('name', 'main')->first();

        $services = Service::all();

        return view('contact', compact('page_info', 'services'));
    }
}
