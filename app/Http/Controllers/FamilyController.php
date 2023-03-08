<?php

namespace App\Http\Controllers;

use App\Models\Family;
use App\Models\MenuItem;
use App\Models\Page;
use App\Models\Service;
use Illuminate\Http\Request;

class FamilyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $page_info = Page::where('name', 'families')->first();

        $families = Family::paginate(6);

        $services = Service::all();

        $menuItems = MenuItem::all();

        return view('families', compact('page_info', 'families', 'services', 'menuItems'));
    }
}
