<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Page;
use App\Models\PageItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminMainPageItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mainPageItems = Page::where('name', 'main')->first()->pageItems;

        return view('admin.mainPageItems.index', compact('mainPageItems'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PageItem  $mainPageItem
     * @return \Illuminate\Http\Response
     */
    public function edit(PageItem $mainPageItem)
    {
        return view('admin.mainPageItems.edit', compact('mainPageItem'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PageItem  $pageItem
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PageItem $mainPageItem)
    {
        $parameters = $request->all();

        if ($mainPageItem->name === 'video_mp4' or $mainPageItem->name === 'video_webm') {
            if ($request->has('value')) {
                Storage::disk('public')->delete($mainPageItem->value);
                $path = Storage::disk('public')->putFile('video', $request->file('value'), 'public');
                $parameters['value'] = $path;
            }
        } elseif ($mainPageItem->name === 'about_image' or $mainPageItem->name === 'about_image_small' or $mainPageItem->name === 'calendar_image' or $mainPageItem->name === 'main_bg_image') {
            if ($request->has('value')) {
                Storage::disk('public')->delete($mainPageItem->value);
                $path = Storage::disk('public')->putFile('main_page', $request->file('value'), 'public');
                $parameters['value'] = $path;
            }
        }

        $mainPageItem->update($parameters);

        return redirect()->route('mainPageItems.index');
    }
}
