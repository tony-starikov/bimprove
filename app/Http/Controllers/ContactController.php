<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Message;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function message(Request $request)
    {
        $parameters = $request->all();

        Message::create($parameters);

        $contacts = Contact::all();

        return redirect()->route('success', compact('contacts'));
    }
}
