<?php

use App\Http\Controllers\Admin;
use App\Http\Controllers\ContactControllers;
use App\Http\Controllers\Home;
use App\Http\Controllers\Registration;
use App\Http\Controllers\Shop;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web RoutesC
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/admin/customer', [Admin::class, 'tebleListProducts'])->name('adminCustomer');
Route::get('/admin/products', [Admin::class, 'tableListProducts'])->name('adminProducts');
Route::get('/admin/delete/{product}', [Admin::class, 'delete'])->name('obrisiProizvod');
Route::get('/admin/deleteCustomer/{customer}', [Admin::class, 'deleteCustomer'])->name('obrisiKorisnika');
Route::get('/admin/home', [Admin::class, 'index']);
Route::post('/admin/addProducts', [Admin::class, 'add']);

Route::get('/admin/customerEdit/{id}', [Admin::class, 'getEditCustomer'])->name('editCustomer');
Route::post('/admin/customerEditPost/{id}', [Admin::class, 'saveEditCustomer'])->name('saveEditCustomer');

Route::post('/admin/update/{id}', [Admin::class, 'saveEdit'])->name('saveEdit');
Route::get('/admin/update/{id}', [Admin::class, 'update'])->name('update.product');

Route::get('/contact', [ContactControllers::class, 'index']);
Route::get('/admin/contact', [ContactControllers::class, 'tableContact']);
Route::post('/contactSend', [ContactControllers::class, 'send']);
Route::get('/admin/custoerDelete/{delete}', [ContactControllers::class, 'delete']);

Route::get('/registration', [Registration::class, 'index']);
Route::post('/sendRegistration', [Registration::class, 'send']);

Route::get('/home', [Home::class, 'index']);
Route::get('/shop', [Shop::class, 'index']);

// registration
Route::get('/', function () {
    return view('welcome');
});
