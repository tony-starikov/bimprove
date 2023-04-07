<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminServiceController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $services = Service::all();

        return view('admin.services.index', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.services.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $parameters = $request->all();

        unset($parameters['image_small']);

        if ($request->has('image_small')) {
            $path = Storage::disk('public')->putFile('services', $request->file('image_small'), 'public');
            $parameters['image_small'] = $path;
        }

        Service::create($parameters);

        return redirect()->route('services.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service)
    {
        return view('admin.services.edit', compact('service'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Service $service)
    {
        $parameters = $request->all();

        if ($request->has('image')) {
            Storage::disk('public')->delete($service->image);
            $path = Storage::disk('public')->putFile('services', $request->file('image'), 'public');
            $parameters['image'] = $path;
        }

        if ($request->has('presentation')) {
            Storage::disk('public')->delete($service->presentation);
            $path = Storage::disk('public')->putFile('presentations', $request->file('presentation'), 'public');
            $parameters['presentation'] = $path;
        }

        $service->update($parameters);

        return redirect()->route('services.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service)
    {
        Storage::disk('public')->delete($service->image);

        $service->delete();

        return redirect()->route('services.index');
    }
}