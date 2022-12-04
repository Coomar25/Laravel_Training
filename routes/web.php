<?php

use App\Http\Controllers\PagesController;
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


Route::get('/home', [PagesController::class, 'home']);
Route::get('/about', [PagesController::class, 'about'])->name("about");
Route::get('/contact', [PagesController::class, 'contact']);

// To store, update , delete such that for manupaltion of data POSt method is used
Route::post('/Product/store', [PagesController::class, 'storeproduct'])->name('product.store');
Route::get('/', [PagesController::class, 'home'])->name('index');

Route::get('/product/edit/{product_id}', [PagesController::class, 'edit'])->name('product.edit');
Route::post('/product/update/{product_id}', [PagesController::class, 'updateproduct'])->name('product.update');

Route::get('/product/delete/{product_id}', [PagesController::class, 'deleteproduct'])->name('product.delete');
