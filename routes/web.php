<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Models\Category;
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
    return '<a href="products">go to products page<a>';
});

Route::resource('products' ,ProductController::class);
Route::get('product/trash' ,[ProductController::class,'trash'])->name('products.trash');
Route::get('product/restore/{id}' ,[ProductController::class,'restore'])->name('products.restore');
Route::get('product/forceDelete/{id}' ,[ProductController::class,'forceDelete'])->name('products.forceDelete');
//
