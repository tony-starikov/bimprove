<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Family;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminFamilyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $families = Family::all();

        return view('admin.families.index', compact('families'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.families.create');
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

        if ($request->has('image')) {
            $path = Storage::disk('public')->putFile('families', $request->file('image'), 'public');
            $parameters['image'] = $path;
        }

        if ($request->has('file')) {
            $path = Storage::disk('public')->putFile('families', $request->file('file'), 'public');
            $parameters['file'] = $path;
        }

        Family::create($parameters);

        return redirect()->route('families.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Family  $family
     * @return \Illuminate\Http\Response
     */
    public function edit(Family $family)
    {
        return view('admin.families.edit', compact('family'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Family  $family
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Family $family)
    {
        $parameters = $request->all();

        if ($request->has('image')) {
            Storage::disk('public')->delete($family->image);
            $path = Storage::disk('public')->putFile('families', $request->file('image'), 'public');
            $parameters['image'] = $path;
        }

        if ($request->has('file')) {
            Storage::disk('public')->delete($family->file);
            $path = Storage::disk('public')->putFile('families', $request->file('file'), 'public');
            $parameters['file'] = $path;
        }

        $family->update($parameters);

        return redirect()->route('families.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Family  $family
     * @return \Illuminate\Http\Response
     */
    public function destroy(Family $family)
    {
        Storage::disk('public')->delete($family->image);
        Storage::disk('public')->delete($family->file);

        $family->delete();

        return redirect()->route('families.index');
    }
}
