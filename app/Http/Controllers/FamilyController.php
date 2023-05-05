<?php

namespace App\Http\Controllers;

use App\Models\Contact;
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

        $families = Family::orderBy('id', 'desc')->paginate(6);

        $services = Service::all();

        $menuItems = MenuItem::all();

        $contacts = Contact::all();

        return view('families', compact('page_info', 'families', 'services', 'menuItems', 'contacts'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function downloadFamily(Family $family)
    {
        return response()->download('images/' . $family->file);
    }
}
