<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\FaqController;
use Illuminate\Support\Facades\Route;

// product CRUD route
Route::get('/', [ProductController::class, 'index'])->name('products.index');
Route::post('/product',[ProductController::class,'store'])->name('products.store');
Route::get('products/{id}', [ProductController::class, 'show'])->name('products.show');
Route::get('/product/create',[ProductController::class,'create'])->name('products.create');
Route::get('/products/{id}/edit', [ProductController::class, 'edit'])->name('products.edit');
Route::put('/products/{id}', [ProductController::class, 'update'])->name('products.update');
Route::delete('/products/{id}', [ProductController::class, 'destroy'])->name('products.destroy');
Route::get('/search', [ProductController::class, 'search'])->name('search');

//cart CRUD route
Route::post('cart/add/{id}', [CartController::class, 'add'])->name('cart.add');

//faq CRUD route
Route::get('/faq', [FaqController::class, 'index'])->name('faq.index');
Route::post('/faq/post',[FaqController::class,'store'])->name('faq.store');
Route::get('/faq/add', [FaqController::class, 'create'])->name('faq.create');
Route::get('/faq/{id}/edit', [FaqController::class, 'edit'])->name('faq.edit');
Route::put('/faq/{id}', [FaqController::class, 'update'])->name('faq.update');
Route::delete('/faq/{id}/destroy', [FaqController::class, 'destroy'])->name('faq.destroy');
Route::delete('/faq/{faqId}/destroySub/{subIndex}', [FaqController::class, 'destroySub'])->name('faq.destroySub');

