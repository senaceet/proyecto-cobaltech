<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('v1')->group(function(){    
    Route::resource('bill', 'Bill\BillsController');
    Route::resource('brand', 'Brand\BrandsController');
    Route::resource('cash', 'Cash\CashController');
    Route::resource('category', 'Category\CategoriesController');
    Route::resource('city', 'City\CitiesController');
    Route::resource('creditcard', 'CreditCard\CreditCardsController');
    Route::resource('debitcard', 'DebitCard\DebitCardsController');
    Route::resource('deliverystatus', 'DeliveryStatus\DeliveryStatusController');
    Route::resource('doctypes', 'DocType\DocTypesController');
    Route::resource('payment', 'Payment\PaymentsController');
    Route::resource('product', 'Product\ProductsController');
    Route::resource('provider', 'Provider\ProvidersController');
    Route::resource('role', 'Role\RolesController');
    Route::resource('shipping', 'Shipping\ShippingsController');
    Route::resource('user', 'User\UsersController');
    Route::resource('warranty', 'Warranty\WarrantyController');
    Route::resource('warrantystatus','WarrantyStatus\WarrantyStatusController');
});