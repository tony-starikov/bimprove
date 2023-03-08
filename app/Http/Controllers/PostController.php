<?php

namespace App\Http\Controllers;

use App\Models\MenuItem;
use App\Models\Page;
use App\Models\Post;
use App\Models\Service;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $page_info = Page::where('name', 'blog')->first();

        $posts = Post::paginate(6);

        $services = Service::all();

        return view('blog', compact('page_info', 'posts', 'services'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        $services = Service::all();

        return view('post', compact('post', 'services'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function subscribe()
    {
//        $page_info = Page::where('name', 'blog')->first();
        $services = Service::all();

        $menuItems = MenuItem::all();

        return view('subscribe', compact ('services', 'menuItems'));
    }
}
