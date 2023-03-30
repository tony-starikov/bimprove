<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Teammate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminTeammateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teammates = Teammate::all();

        return view('admin.teammates.index', compact('teammates'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.teammates.create');
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
            $path = Storage::disk('public')->putFile('teammates', $request->file('image'), 'public');
            $parameters['image'] = $path;
        }

        Teammate::create($parameters);

        return redirect()->route('teammates.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Teammate  $teammate
     * @return \Illuminate\Http\Response
     */
    public function edit(Teammate $teammate)
    {
        return view('admin.teammates.edit', compact('teammate'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Teammate  $teammate
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Teammate $teammate)
    {
        $parameters = $request->all();

        if ($request->has('image')) {
            Storage::disk('public')->delete($teammate->image);
            $path = Storage::disk('public')->putFile('teammates', $request->file('image'), 'public');
            $parameters['image'] = $path;
        }

        $teammate->update($parameters);

        return redirect()->route('teammates.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Teammate  $teammate
     * @return \Illuminate\Http\Response
     */
    public function destroy(Teammate $teammate)
    {
        Storage::disk('public')->delete($teammate->image);

        $teammate->delete();

        return redirect()->route('teammates.index');
    }
}
