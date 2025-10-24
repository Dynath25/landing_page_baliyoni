<?php

use App\Http\Controllers\ArticleNewsController;
use App\Http\Controllers\BannerAdvertisemenetController;    
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\PartnershipController;
use App\Http\Controllers\DukunganController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoadmapController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CartController;

// Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/', [HomeController::class, 'index'])->name('home');

// Route::get('/video', function () {
//     return view('video', ['title' => 'video']);
// });
Route::get('/video', function () {
    return view('video', ['title' => 'video']);
});
Route::get('/video-player', function () {
    return view('video-player', ['title' => 'video-player']);
});

Route::get('/berita', function () {
    return view('berita', ['title' => 'Berita']);
});
Route::get('/hubungi', function () {
    return view('hubungi', ['title' => 'Hubungi']);
});





Route::prefix('banners')->group(function () {
    Route::get('/', [BannerAdvertisemenetController::class, 'index'])->name('banners.index');
    // Add more routes for banners if needed
});

// Prefix for ArticleNews routes
Route::prefix('articles')->group(function () {
    Route::get('/', [ArticleNewsController::class, 'index'])->name('article.index');
    Route::get('/{slug}', [ArticleNewsController::class, 'show'])->name('article.show');
});


Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery');
Route::get('/slider', [SliderController::class, 'index'])->name('slider');
Route::get('/roadmaps', [RoadmapController::class, 'index'])->name('roadmaps');
Route::get('/partnership', [PartnershipController::class, 'index'])->name('partnership');
Route::get('/dukungan', [DukunganController::class, 'index'])->name('dukungan');


Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/services', [ServiceController::class, 'index'])->name('services');
Route::get('/product', [ProductController::class, 'index'])->name('product');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');

Route::get('/cart', [CartController::class, 'index'])->name('cart.index');

// Aksi untuk menambah item ke keranjang
Route::post('/cart/add/{product}', [CartController::class, 'add'])->name('cart.add');
// Aksi untuk mengupdate jumlah item
Route::post('/cart/update/{productId}', [CartController::class, 'update'])->name('cart.update');
// Aksi untuk menghapus item dari keranjang
Route::post('/cart/remove/{productId}', [CartController::class, 'remove'])->name('cart.remove');

Route::get('/products', [ProductController::class, 'index'])->name('products.index');

// {product:slug} adalah parameter dinamis berdasarkan slug
Route::get('/product/{product:slug}', [ProductController::class, 'show'])->name('products.show');
