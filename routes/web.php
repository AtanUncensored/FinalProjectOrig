<?php

use App\Http\Controllers\SupplierController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Landing');
});

Route::get('/suppliers', function () {
    return view('suppliers');
});
Route::get('/view', function () {
    return view('view');
});

Route::get('/scanner', function () {
    return view('scanner');
});
Route::get('/about', function () {
    return view('about');
});




Route::get('/suppliers', [SupplierController::class, 'index']);
Route::get('/popular-products', [ProductController::class, 'popular'])->name('popular-products');
Route::get('/expired-products', [ProductController::class, 'expired'])->name('expired-products');
Route::get('/products', [ProductController::class, 'index'])->name('products');
Route::get('/products/csv-download', [ProductController::class, 'generateCSV']);
Route::get('/products/pdf-download', [ProductController::class, 'generatePDF']);
Route::get('/products/{product}', [ProductController::class, 'show'])->name('products.show');
Route::get('/products/popDelete/{product}', [ProductController::class, 'popDestroy'])->name('products.delete');
Route::get('/products/expDelete/{product}', [ProductController::class, 'expDestroy'])->name('products.delete');
Route::get('/products/delete/{product}', [ProductController::class, 'destroy'])->name('products.delete');
Route::post('/products/csv-import', [ProductController::class, 'importCsv'])->name('products.importCsv');

Route::get('/prodCreate', [ProductController::class, 'create']);
Route::post('/prodCreate', [ProductController::class, 'store']);

Route::get('/suppliers/{supplier}', [SupplierController::class, 'show'])->name('suppliers.show');
Route::get('/suppliers/delete/{supplier}', [SupplierController::class, 'destroy'])->name('suppliers.delete');
Route::get('/create', [SupplierController::class,'create']);
Route::post('/create',[SupplierController::class,'store']);


Route::resource('/suppliers', SupplierController::class);