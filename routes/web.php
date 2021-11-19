<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\produkController;
use App\Http\Controllers\categoriesController;
use App\Http\Controllers\customersController;

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

Route::get('/admin', function () {
    return view('admin');
});


Route::get('/produk',[produkController::class, 'index'])->name("produk");
Route::get('/produk/create',[produkController::class, 'create']);
Route::get('/produk/{id}/delete',[produkController::class, 'delete']);


Route::get('/categories',[categoriesController::class, 'index'])->name("categories");
Route::get('/categories/create',[categoriesController::class, 'create']);
Route::get('/categories/{id}/delete',[categoriesController::class, 'delete']);

Route::get('/customers',[customersController::class, 'index'])->name("customers");
Route::get('/customers/create',[customersController::class, 'create']);
Route::get('/customers/{id}/delete',[customersController::class, 'delete']);



