<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsGet;
use App\Http\Controllers\ProductGet;
use App\Http\Controllers\ProductPost;
use App\Http\Controllers\ProductsPut;
use App\Http\Controllers\ProductDelete;
use App\Http\Controllers\SearchProductGet;






Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/products', ProductsGet::class);
Route::get('/products/{id}', ProductGet::class);
Route::post('/products', ProductPost::class);
Route::put('/products/{id}', ProductsPut::class);
Route::delete('/products/{id}', ProductDelete::class);
Route::get('/search', SearchProductGet::class);
