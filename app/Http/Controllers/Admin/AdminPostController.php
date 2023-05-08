<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();

        return view('admin.posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $parameters = $request->all();

        unset($parameters['image']);

        if ($request->has('image')) {
            $path = Storage::disk('public')->putFile('posts', $request->file('image'), 'public');
            $parameters['image'] = $path;
        }

        $post = Post::create($parameters);

        $detail = $parameters['content'];

        $dom = new \domdocument();
        $dom->loadHtml($detail, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
        $images = $dom->getelementsbytagname('img');
        $notes_images = [];

        //loop over img elements, decode their base64 src and save them to public folder,
        //and then replace base64 src with stored image URL.
        foreach($images as $k => $img){
            $data = $img->getattribute('src');

            list($type, $data) = explode(';', $data);
            list(, $data)      = explode(',', $data);

            $data = base64_decode($data);
            $image_name= time().$k.'.png';
            $notes_images[] = 'posts_notes/' . $image_name;
            $path = public_path() .'/images/posts_notes/' . $image_name;

            file_put_contents($path, $data);

            $img->removeattribute('src');
            $img->setattribute('src', '/images/posts_notes/' . $image_name);
            $img->setAttribute('class', 'img-fluid w-100');
        }

        $detail = $dom->savehtml();
        $post->content = $detail;
        $post->notes_images = serialize($notes_images);
        $post->save();

        return redirect()->route('posts.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('admin.posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $parameters = $request->all();

        if ($request->has('image')) {
            Storage::disk('public')->delete($post->image);
            $path = Storage::disk('public')->putFile('posts', $request->file('image'), 'public');
            $parameters['image'] = $path;
        }

        $post->update($parameters);

        return redirect()->route('posts.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        Storage::disk('public')->delete($post->image);

        $images = unserialize($post->notes_images);

        if (is_array($images)) {
            foreach ($images as $imageName) {
                Storage::disk('public')->delete($imageName);
            }
        }

        $post->delete();

        return redirect()->route('posts.index');
    }
}
