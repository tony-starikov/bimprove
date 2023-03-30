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

        $posts = Post::orderBy('id', 'desc')->paginate(6);

        $menuItems = MenuItem::all();

        $services = Service::all();

        return view('blog', compact('page_info', 'posts', 'services', 'menuItems'));
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

        $menuItems = MenuItem::all();

        return view('post', compact('post', 'services', 'menuItems'));
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
