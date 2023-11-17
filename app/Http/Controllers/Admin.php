<?php

namespace App\Http\Controllers;

use App\Models\CustomerModel;
use App\Models\ProductModel;
use Illuminate\Http\Request;

class Admin extends Controller
{
    public function index()
    {
        return view('/admin/home');
    }

    public function deleteCustomer(CustomerModel $customer)
    {
        $customer->delete();

        return redirect()->back();
    }

    // izvalci sve iz baze sa prefiksom modela
    public function delete(ProductModel $product)
    {
        $product->delete();

        return redirect()->back();
    }

    public function tableListProducts()
    {
        $customers = CustomerModel::all();
        $products = ProductModel::all();

        return view('/admin/products', compact('products', 'customers'));
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
