<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\MenuItem;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function showService($slug)
    {
        $services = Service::all();

        $service = Service::where('slug', $slug)->first();

        $menuItems = MenuItem::all();

        $contacts = Contact::all();

        return view('service', compact('service', 'services', 'menuItems', 'contacts'));
    }

    public function downloadService($slug)
    {
        $service = Service::where('slug', $slug)->first();

        $myFile = 'images/' . $service->presentation;

        $headers = ['Content-Type: application/pdf'];

        $newName = $slug . '.pdf';

//        return response()->file($pathToFile, $headers);

        return response()->file($myFile, $headers);
    }
}
