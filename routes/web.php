<?php

use App\Http\Controllers\ProductControl;
use Illuminate\Support\Facades\Route;

Route::get('/', [ProductControl::class, 'index']);

Route::get('/create', [ProductControl::class, 'CreateProduct']);
Route::post('/', [ProductControl::class, 'StoreProduct']);
