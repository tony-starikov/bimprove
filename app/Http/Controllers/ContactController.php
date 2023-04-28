<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function message(Request $request)
    {
        $parameters = $request->all();

        Message::create($parameters);

        return redirect()->route('success');
    }
}
