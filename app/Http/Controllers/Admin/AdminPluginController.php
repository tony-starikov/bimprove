<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Plugin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminPluginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $plugins = Plugin::all();

        return view('admin.plugins.index', compact('plugins'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.plugins.create');
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
        unset($parameters['file']);
        unset($parameters['logo']);

        if ($request->has('image')) {
            $path = Storage::disk('public')->putFile('plugins', $request->file('image'), 'public');
            $parameters['image'] = $path;
        }

        if ($request->has('file')) {
            $path = Storage::disk('public')->putFile('plugins', $request->file('file'), 'public');
            $parameters['file'] = $path;
        }

        if ($request->has('logo')) {
            $path = Storage::disk('public')->putFile('plugins', $request->file('logo'), 'public');
            $parameters['logo'] = $path;
        }

        Plugin::create($parameters);

        return redirect()->route('plugins.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Plugin  $plugin
     * @return \Illuminate\Http\Response
     */
    public function edit(Plugin $plugin)
    {
        return view('admin.plugins.edit', compact('plugin'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Plugin  $plugin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Plugin $plugin)
    {
        $parameters = $request->all();

        if ($request->has('image')) {
            Storage::disk('public')->delete($plugin->image);
            $path = Storage::disk('public')->putFile('plugins', $request->file('image'), 'public');
            $parameters['image'] = $path;
        }

        if ($request->has('file')) {
            Storage::disk('public')->delete($plugin->file);
            $path = Storage::disk('public')->putFile('plugins', $request->file('file'), 'public');
            $parameters['file'] = $path;
        }

        if ($request->has('logo')) {
            Storage::disk('public')->delete($plugin->logo);
            $path = Storage::disk('public')->putFile('plugins', $request->file('logo'), 'public');
            $parameters['logo'] = $path;
        }

        $plugin->update($parameters);

        return redirect()->route('plugins.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Plugin  $plugin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Plugin $plugin)
    {
        Storage::disk('public')->delete($plugin->image);
        Storage::disk('public')->delete($plugin->file);
        Storage::disk('public')->delete($plugin->logo);

        $plugin->delete();

        return redirect()->route('plugins.index');
    }
}
