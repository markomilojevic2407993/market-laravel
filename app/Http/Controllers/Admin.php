<?php

namespace App\Http\Controllers;

use App\Models\ProductModel;
use Illuminate\Http\Request;

class Admin extends Controller
{
    public function index()
    {
        return view('/admin/home');
    }

    // izvalci sve iz baze sa prefiksom modela
    public function delete(ProductModel $product)
    {
        $product->delete();
    }

    public function tableListProducts()
    {
        $products = ProductModel::all();

        return view('/admin/products', compact('products'));
    }

    public function delate(Request $request)
    {
        $delate = ProductModel::destroy('');
    }

    public function add(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'description' => 'required|string',
            'amount' => 'required',
            'price' => 'required',
        ]);
        ProductModel::create([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'amount' => $request->input('amount'),
            'price' => $request->input('price'),
        ]);

        return redirect('admin/home');
    }
}
