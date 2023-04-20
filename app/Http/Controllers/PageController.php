<?php

namespace App\Http\Controllers;

use App\Models\Achievement;
use App\Models\MenuItem;
use App\Models\Page;
use App\Models\Post;
use App\Models\Service;
use App\Models\Star;
use App\Models\Teammate;
use App\Models\Testimonial;
use App\Models\Work;

class PageController extends Controller
{
    public function main()
    {
        $page_info = Page::where('name', 'main')->first();

        $menuItems = MenuItem::all();

        $services = Service::all();

        $achievements = Achievement::all();

        $stars = Star::all();

        $teammates = Teammate::all();

        $testimonials = Testimonial::all();

        $works = Work::all();

        return view('main', compact('page_info', 'services', 'achievements', 'stars', 'teammates', 'menuItems', 'testimonials', 'works'));
    }

    public function contact()
    {
        $page_info = Page::where('name', 'contacts')->first();

        $menuItems = MenuItem::all();

        $services = Service::all();

        return view('contact', compact('page_info', 'services', 'menuItems'));
    }

    public function send()
    {
        $page_info = Page::where('name', 'contacts')->first();

        $menuItems = MenuItem::all();

        $services = Service::all();

        return view('send', compact('page_info', 'services', 'menuItems'));
    }

    public function success()
    {
        $page_info = Page::where('name', 'contacts')->first();

        $menuItems = MenuItem::all();

        $services = Service::all();

        return view('success', compact('page_info', 'services', 'menuItems'));
    }
}
