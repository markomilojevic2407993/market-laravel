<?php

namespace App\Http\Controllers;

use App\Models\CustomerModel;
use App\Models\ProductModel;

class Home extends Controller
{
    public function index()
    {
        $allProducts = ProductModel::orderBy('id', 'desc')->take(1)->get();
        $allCustomer = CustomerModel::all();

        return view('home', compact('allProducts', 'allCustomer'));
    }
}
