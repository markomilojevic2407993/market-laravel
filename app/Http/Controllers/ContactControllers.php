<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactControllers extends Controller
{
    public function tableContact()
    {
        $allContacts = Contact::all();

        return view('/admin/contact', compact('allContacts'));
    }

    public function index()
    {
        $allContacts = Contact::all();

        return view('/contact', compact('allContacts'));
    }

    public function send(Request $request)
    {
        $request->validate([
         'email' => 'required|string',
         'message' => 'required|string|min:5|max:200',
        ]);

        Contact::create([
            'email' => $request->input('email'),
            'message' => $request->input('message'),
        ]);

        return redirect('/contact');
    }

    public function delete(Contact $delete)
    {
        $delete->delete();

        return redirect()->back();
    }
}
