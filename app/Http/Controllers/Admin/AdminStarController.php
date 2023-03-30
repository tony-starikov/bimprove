<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Star;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminStarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stars = Star::all();

        return view('admin.stars.index', compact('stars'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Star  $star
     * @return \Illuminate\Http\Response
     */
    public function edit(Star $star)
    {
        return view('admin.stars.edit', compact('star'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Star  $star
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Star $star)
    {
        $parameters = $request->all();

        if ($request->has('image')) {
            Storage::disk('public')->delete($star->image);
            $path = Storage::disk('public')->putFile('stars', $request->file('image'), 'public');
            $parameters['image'] = $path;
        }

        if ($request->has('image_small')) {
            Storage::disk('public')->delete($star->image_small);
            $path = Storage::disk('public')->putFile('stars', $request->file('image_small'), 'public');
            $parameters['image_small'] = $path;
        }

        $star->update($parameters);

        return redirect()->route('stars.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Star  $star
     * @return \Illuminate\Http\Response
     */
    public function destroy(Star $star)
    {
        //
    }
}
