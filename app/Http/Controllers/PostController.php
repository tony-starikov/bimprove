<?php

namespace App\Http\Controllers;

use App\Models\Contact;
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

        $contacts = Contact::all();

        return view('blog', compact('page_info', 'posts', 'services', 'menuItems', 'contacts'));
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

        $contacts = Contact::all();

        return view('post', compact('post', 'services', 'menuItems', 'contacts'));
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

        $contacts = Contact::all();

        return view('subscribe', compact ('services', 'menuItems', 'contacts'));
    }
}
