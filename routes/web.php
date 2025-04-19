<?php

use App\Http\Controllers\ProductControl;
use Illuminate\Support\Facades\Route;

// home (tampil)
Route::get('/product', [ProductControl::class, 'index'])->name('product.home');

// input data (create)
Route::get('/product/create', [ProductControl::class, 'CreateProduct'])->name('product.create');
Route::post('/product', [ProductControl::class, 'StoreProduct']);

// edit data
Route::get('/product/{product}/edit', [ProductControl::class, 'EditProduct'])->name('product.edit');
Route::put('/product/{product}', [ProductControl::class, 'UpdateProduct'])->name('product.update');

// hapus data
Route::delete('/product/{product_id}', [ProductControl::class, 'DeleteProduct'])->name('product.delete');
