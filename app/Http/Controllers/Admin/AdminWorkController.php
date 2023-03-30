<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Work;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminWorkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $works = Work::all();

        return view('admin.works.index', compact('works'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.works.create');
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
        unset($parameters['image_small']);

        if ($request->has('image')) {
            $path = Storage::disk('public')->putFile('works', $request->file('image'), 'public');
            $parameters['image'] = $path;
        }

        if ($request->has('image_small')) {
            $path = Storage::disk('public')->putFile('works', $request->file('image_small'), 'public');
            $parameters['image_small'] = $path;
        }

        Work::create($parameters);

        return redirect()->route('works.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Work  $work
     * @return \Illuminate\Http\Response
     */
    public function edit(Work $work)
    {
        return view('admin.works.edit', compact('work'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Work  $work
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Work $work)
    {
        $parameters = $request->all();

        if ($request->has('image')) {
            Storage::disk('public')->delete($work->image);
            $path = Storage::disk('public')->putFile('works', $request->file('image'), 'public');
            $parameters['image'] = $path;
        }

        if ($request->has('image_small')) {
            Storage::disk('public')->delete($work->image_small);
            $path = Storage::disk('public')->putFile('works', $request->file('image_small'), 'public');
            $parameters['image_small'] = $path;
        }

        $work->update($parameters);

        return redirect()->route('works.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Work  $work
     * @return \Illuminate\Http\Response
     */
    public function destroy(Work $work)
    {
        Storage::disk('public')->delete($work->image);
        Storage::disk('public')->delete($work->image_small);

        $work->delete();

        return redirect()->route('works.index');
    }
}
