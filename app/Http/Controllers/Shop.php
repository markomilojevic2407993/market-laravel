<?php

namespace App\Http\Controllers;

use App\Models\ProductModel;

class Shop extends Controller
{
    public function index()
    {
        $allProducts = ProductModel::all();

        return view('shop', compact('allProducts'));
    }
}
