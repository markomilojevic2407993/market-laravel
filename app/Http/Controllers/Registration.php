<?php

namespace App\Http\Controllers;

use App\Models\CustomerModel;
use Illuminate\Http\Request;

class Registration extends Controller
{
    public function index()
    {
        return view('registration');
    }

    public function send(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|string',
            'pass' => 'required|string|min:8',
            'price' => 'required|numeric',
        ]);

        CustomerModel::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'pass' => $request->input('pass'),
            'price' => $request->input('price'),
        ]);

        return redirect('/home');
    }
}
