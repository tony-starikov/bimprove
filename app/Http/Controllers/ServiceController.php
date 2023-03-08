<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function showService($slug)
    {
        $services = Service::all();

        $service = Service::where('slug', $slug)->first();

        return view('service', compact('service', 'services'));
    }
}
