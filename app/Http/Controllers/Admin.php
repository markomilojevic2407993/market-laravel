<?php

namespace App\Http\Controllers;

use App\Models\CustomerModel;
use App\Models\ProductModel;
use Illuminate\Http\Request;

class Admin extends Controller
{
    public function saveEditCustomer(Request $request, $id)
    {
        $customer = CustomerModel::where(['id' => $id])->first();

        $customer->name = $request->input('name');
        $customer->email = $request->input('email');
        $customer->pass = $request->input('pass');
        $customer->price = $request->input('price');

        $customer->save();

        return redirect()->route('adminCustomer');
    }

    public function getEditCustomer(Request $request, $id)
    {
        $customer = CustomerModel::where(['id' => $id])->first();

        return view('/admin/customerEdit', compact('customer'));
    }

    public function saveEdit(Request $request, $id)
    {
        $product = ProductModel::where(['id' => $id])->first();

        $product->name = $request->input('name');
        $product->description = $request->input('description');
        $product->amount = $request->input('amount');
        $product->price = $request->input('price');

        $product->save();

        return redirect()->route('adminProducts');
    }

    public function update(Request $request, $id)
    {
        $product = ProductModel::where(['id' => $id])->first();

        return view('/admin/update', compact('product'));
    }

    public function index()
    {
        return view('/admin/home');
    }

    public function tebleListProducts()
    {
        $customers = CustomerModel::all();

        return view('/admin/customer', compact('customers'));
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

    public function add(Request $request)
    {
        $request->validate([
            'name' => 'required|string|unique:product',
            'description' => 'required|string',
            'amount' => 'required|min:0', // request required
            'price' => 'required|min:0',
        ]);
        ProductModel::create([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'amount' => $request->input('amount'),
            'price' => $request->input('price'),
        ]);

        return redirect('/admin/products');
    }
}
